<?php

function codex_custom_init() {
    $args = [
        'public' => true,
        'label' => 'Portfolio',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-id'
    ];

    register_post_type('portfolio', $args);
}

add_action('init', 'codex_custom_init');

function onews_setup() {
    add_theme_support('title-tag');
    add_theme_support('menus');

    register_nav_menus([
        'footer' => 'Menu de liens dans le footer'
    ]);
}

add_action('after_setup_theme', 'onews_setup');

function onews_scripts() {
    wp_enqueue_style('main-style',get_theme_file_uri('assets/css/style.css'), ['reset-style']);
    wp_enqueue_style('reset-style', get_theme_file_uri('assets/css/reset.css'));
}

add_action('wp_enqueue_scripts', 'onews_scripts');

remove_action('wp_head', 'wp_generator');