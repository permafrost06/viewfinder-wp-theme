<?php

function learningWordPress_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

function viewfinderThemeSetup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'viewfinderThemeSetup');