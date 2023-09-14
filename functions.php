<?php 
function my_wp_portfolio_script_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/styles/css/main-style.css', array(), '1.0.0', 'all');

	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/site-js.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_wp_portfolio_script_enqueue');

add_theme_support( 'post-thumbnails' );


function my_wp_portfolio_theme_setup() {
	add_theme_support('menus');
	add_theme_support( 'post-thumbnails' );

	register_nav_menu('primary', 'Primary Menu Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	register_nav_menu('sub-pages', 'Sub Pages Menu');
	register_nav_menu('footer-menu', 'Footer Menu');
}
add_action('init', 'my_wp_portfolio_theme_setup');


add_filter( 'excerpt_length', function($length) {
	return 999;
}, PHP_INT_MAX );



add_post_type_support( 'project', 'thumbnail' );   
function project_custom_post_type() {
	register_post_type('project',
		array(
			'labels'      => array(
				'name'          => __('Projects', 'textdomain'),
				'singular_name' => __('Project', 'textdomain'),
			),
			'show_in_rest' => true,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
			'public'      => true,
			'has_archive' => true,
			'rewrite' 	=> array('slug' => 'project')	

		)
	);
}
add_action('init', 'project_custom_post_type');


add_post_type_support( 'testimonial', 'thumbnail' );   
function testimonial_custom_post_type() {
	register_post_type('testimonial',
		array(
			'labels'      => array(
				'name'          => __('Testimonials', 'textdomain'),
				'singular_name' => __('Testimonial', 'textdomain'),
			),
			'public'      => true,
			'has_archive' => false,
		)
	);
}
add_action('init', 'testimonial_custom_post_type');


?>