<?php

require_once 'vendor/autoload.php';
require_once '_acf.php';


add_theme_support( 'title-tag' );
add_filter('show_admin_bar', '__return_false');

function addStylesAndScripts() {
    wp_enqueue_style( 'style-bundle', get_template_directory_uri() . '/dist/bundle.css' );
    wp_enqueue_script( 'script-bundle', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'addStylesAndScripts' );

