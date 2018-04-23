<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function theme_enqueue_scripts() {
    wp_enqueue_script( 'scriptaculous' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
?>