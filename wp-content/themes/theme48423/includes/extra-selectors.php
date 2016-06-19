<?php
/**
 * menu-num.php
 *
 */
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function custom_scripts() {
    wp_enqueue_script( 'jquery-extra-selectors', get_stylesheet_directory_uri() . '/js/jquery-extra-selectors.js', array('jquery'), '1.0' );
} ?>