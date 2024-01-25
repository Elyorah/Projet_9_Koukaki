<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/style.css' );

// Ajout de Swiper.js
    wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.5', true);
// Ajout du script personnalisé JS
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/custom-script.js', array(), '1.0', true);
    wp_enqueue_script('swiper-script', get_stylesheet_directory_uri() . '/assets/js/swiper-script.js', array(), '1.0', true);
}


// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}