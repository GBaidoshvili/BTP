<?php

	function resources () 
	{
		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style('custom', 'http://localhost/stuff/wordpress/wp-content/themes/BTP/css/bpg-nino-mtavruli.min.css?ver=4.9.1');
	}

	add_action('wp_enqueue_scripts', 'resources');
	
	//Navigation menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
	));
	
	add_theme_support( 'post-thumbnails' ); 

?>