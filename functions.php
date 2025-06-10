<?php

function load_scripts() {
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array(),
        filemtime(get_stylesheet_directory() . '/style.css'),'all'
    );

    wp_enqueue_script('dropdown',get_template_directory().'/js/dropdown.js',array(),'1.0',false);
}

add_action('wp_enqueue_scripts', 'load_scripts');

function config() {
    register_nav_menus(
        array(
            'wp_devs_main_menu' => 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu',

        )
        );

        $args=array(
            'height' => 225,
            'width' => 1920,
        );

        add_theme_support('custom-header', $args);
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
        add_theme_support('title-tag');
}

add_action('after_setup_theme', 'config',0);

?>