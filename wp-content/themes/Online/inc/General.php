<?php 
class General {
	public function __construct () {
		add_action('wp_enqueue_scripts', [$this, 'connectedStylesAndScripts']);

		add_action('after_setup_theme', function () {
			register_nav_menus([
				'menu1' => 'menu1',
				'menu2' => 'menu2',
				'menu3' => 'menu3'
			]);
		});
		
		add_theme_support( 'post-thumbnails' );
		add_filter( 'excerpt_length', function(){
			return 5;
		} );
		
		add_filter( 'excerpt_more', function( $more ) {
			return '...';
		} );
	}

	public function connectedStylesAndScripts () {
		$ver = filemtime(get_template_directory() . '/dist/main.bundle.js');
		wp_enqueue_script('main', URI . '/dist/main.bundle.js', [], $ver, true);
		$ver = filemtime(get_template_directory() . '/dist/main.bundle.css');
		wp_enqueue_style('main', URI . '/dist/main.bundle.css', [], $ver);
		$ver = filemtime(get_template_directory() . '/style.css');
		wp_enqueue_style('second', URI . '/style.css', [], $ver);
	}
}

new General();