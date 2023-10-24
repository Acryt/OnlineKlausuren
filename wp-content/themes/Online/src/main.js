// SCSS
import "./scss/_main.scss";
// Swiper SCSS
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
// Font Awesome
// import "@fortawesome/fontawesome-free/css/all.css";

import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";

// JS
import { sliders } from "./js/sliders.js";

document.addEventListener("DOMContentLoaded", () => {
	// niceSelectVanilla();
	// mobileMenu();
	// stickyHeader();
	// mailer();
	// stepper();
	// calendarInput();
	// dropdown();
	// accrd();
	// closePopups();
	// openPopup();
	// cookieClose();
	sliders();
	// siteTimer();
	// promo();
	// phoneInput();
	// promoBlockTimer();
	// onlineForm();
	// calc();
	// toc();
	// prcBtn();
	// progressBar();

	// let wow = new WOW({
	// 	boxClass: "wow", // default
	// 	animateClass: "animate__animated", // default
	// 	offset: 0, // default
	// 	mobile: true, // default
	// 	live: true, // default
	// });
	// wow.init();
});

console.log('Script Loaded');