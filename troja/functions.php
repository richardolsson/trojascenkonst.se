<?php

add_action('init', 'troja_init');
function troja_init() {
    add_theme_support('post-thumbnails');

    troja_register_post_types();
    troja_register_nav_menus();
}

function troja_register_post_types() {
    register_post_type('project', array(
        'labels' => array(
            'name' => __('Projects', 'troja'),
            'singular_name' => __('Project', 'troja'),
        ),
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ),
        'public' => true,
        'has_archive' => false,
    ));
}

function troja_register_nav_menus() {
    register_nav_menus(array(
        'header-menu' => __('Header menu', 'troja'),
    ));
}
