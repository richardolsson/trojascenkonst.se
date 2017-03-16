<?php

add_action('init', 'troja_init');
function troja_init() {
    add_theme_support('post-thumbnails');

    troja_register_post_types();
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
