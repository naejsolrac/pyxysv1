<?php

namespace App;

class ThemeConfig {

    public function __constructor() {}

    public function prepareWp() {
        add_theme_support( 'title-tag' ); // suporte a tag <title> dinâmica
        add_filter('show_admin_bar', '__return_false'); // remove barra de admin
    }
    
    public function loadStyle( $fullPath ) {
        add_action( 'wp_enqueue_scripts', function() use ($fullPath) {
            wp_enqueue_style( 'style-bundle', $fullPath );
        });
    }

    public function loadScriptAtFooter( $fullPath, $version = '1.0.0' ) {
        add_action( 'wp_enqueue_scripts', function() use ($fullPath, $version) {
            wp_enqueue_script( 'script-bundle', $fullPath, [], $version, true );
        });
    }

    public function setupAcfs() {
        require_once '_acf.php';
    }

    public function setupOptionsPage() {
        require_once '_optionsPage.php';
    }

    public static function option($optionName) {
        return get_field( $optionName, 'option' );
    }

}