<?php

add_action('init', 'troja_init');
function troja_init() {
    add_theme_support('post-thumbnails');

    troja_register_image_sizes();
    troja_register_post_types();
    troja_register_nav_menus();
    troja_register_fields();
}

function troja_register_image_sizes() {
    add_image_size('project_wide', 1500, 750, array('center', 'center'));
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

function troja_register_fields() {
    require('fields/post.php');
    require('fields/project.php');
}
