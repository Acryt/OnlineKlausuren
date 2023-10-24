import fs from "fs";
import path from "path";
import gulp from "gulp";
import { fileURLToPath } from "url";
const { src, dest, watch, parallel } = gulp;

import imagemin from "gulp-imagemin"; // минификация картинок
import changed from "gulp-changed"; // фильтр
import flatten from "gulp-flatten"; // плоское копирование

import { FontGenerator } from "@coremyslo/font-generator";
import { IconGenerator } from "@coremyslo/icon-generator";

import through from "through2";

import webpackStream from "webpack-stream";
import webpackConfig from "./webpack.config.js";

function webpackScript() {
	return (
		src(["src/main.js"])
			.pipe(webpackStream(webpackConfig))
			// .pipe(concat("main.min.js"))
			.pipe(dest(`./dist/`))
	);
}
function generateIconsCSS() {
	let index = 0;
	return gulp
		.src("src/icons/*.svg")
		.pipe(
			through.obj(function (file, encoding, callback) {
				if (file.isBuffer()) {
					const className = path
						.basename(file.path, path.extname(file.path))
						.slice(4);
					const contentCodePoint =
						"E" + (2304 + index).toString(16).toUpperCase();
					const cssString = `.icon-${className}:before { content: '\\${contentCodePoint}'; }\n`;
					this.push(cssString);
					index++;
				}
				callback();
			})
		)
		.pipe(fs.createWriteStream("src/scss/svg-font.scss"));
}
async function generateFont() {
	const currentFilePath = new URL(import.meta.url).pathname;
	const currentDirectory = path.dirname(currentFilePath);
	const cleanPath = currentDirectory.replace(/^\//, ""); // Удаляем первый слеш
	const iconGenerator = new IconGenerator(cleanPath + "/src/icons");
	await iconGenerator.read();

	const fontGenerator = new FontGenerator({
		name: "SvgFont",
	});
	await fontGenerator.generate(iconGenerator.icons);
	await fontGenerator.write("src/fonts/svg");
}
function images() {
	return src("src/img/**/*.*")
		.pipe(imagemin())
		.pipe(changed("dist/img"))
		.pipe(dest("dist/img"));
}
function watcher() {
	// watch(["src/components/**/*.scss"], styles);
	// watch(["src/global/*.scss"], mainStyle, adminStyle);
	// watch(["src/**/*.js"], webpackScript);
	// watch(["src/components/**/*.php"], phpDest);
	watch(["src/img/**"], images);
	watch(["src/icons/*"], generateFont);
	watch(["src/icons/*"], generateIconsCSS);
	watch(["src/**/*.js", "src/**/*.scss"], webpackScript);
	// watch(["src/fonts/**/*"], fontConvert);
	// watch(["src/icons/**/*"], generateFont);
}

export { generateIconsCSS, webpackScript };
export default parallel(
	webpackScript,
	images,
	generateFont,
	generateIconsCSS,
	watcher
);
