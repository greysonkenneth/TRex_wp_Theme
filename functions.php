<? php

function trex_script_enqueue() {

	wp_enqueue_style('custom syle', get_template_directory_uri() . '/css/TREX_INTERN.css', array(), '1.0.0', 'all');

	wp_enqueue_script('cusomtjs', get_template_directory_uri() . '/js/TREX_INTERN.js, array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

function TREX_INTERN_theme_setup() {
	
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Nav');
	
	register_nav_menu('secondary', 'Footer Nav');

}


add_action('after_setup_theme', 'TREX_INTERN_theme_setup');
