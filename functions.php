<?php
function theme_files(){

	wp_enqueue_style('bootstrap_files', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

	wp_enqueue_style('stylesheet_files', get_stylesheet_uri());

	wp_enqueue_style('font_files', '//fonts.googleapis.com/css?family=Playfair+Display&display=swap');

	wp_enqueue_style('icon_files', '//use.fontawesome.com/releases/v5.8.1/css/all.css');

	wp_enqueue_script('js_files', '//code.jquery.com/jquery-3.3.1.slim.min.js');
}

add_action('wp_enqueue_scripts', 'theme_files');

function tocando_tierra_feature() {
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tocando_tierra_feature');
