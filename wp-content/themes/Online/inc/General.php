<?php 
class General {
	public function __construct () {
		add_action('wp_enqueue_scripts', [$this, 'connectedStylesAndScripts']);
	}

	public function connectedStylesAndScripts () {
		$ver = filemtime(get_template_directory() . './dist/main.bundle.js');
		wp_enqueue_script('main', URI . './dist/main.bundle.js', [], $ver, true);
		$ver = filemtime(get_template_directory() . './dist/main.bundle.css');
		wp_enqueue_style('main', URI . './dist/main.bundle.css', [], $ver);
		$ver = filemtime(get_template_directory() . './style.css');
		wp_enqueue_style('second', URI . './style.css', [], $ver);
	}
}

new General();