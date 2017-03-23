<?php

if( function_exists('acf_add_local_field_group') ):

register_field_group(array(
    'key' => 'post_meta',
    'title' => __('Post meta', 'troja'),
    'fields' => array(
        array(
            'key' => 'post_meta_kicker',
            'label' => __('Kicker', 'troja'),
            'name' => 'kicker',
            'type' => 'textarea',
        ),
        array(
            'key' => 'post_meta_caption',
            'label' => __('Caption', 'troja'),
            'name' => 'caption',
            'type' => 'text',
        ),
    ),
    'location' => array(
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'project',
            ),
        )
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
        0 => 'custom_fields',
        1 => 'discussion',
        2 => 'comments',
        3 => 'format',
        4 => 'page_attributes',
        5 => 'send-trackbacks',
    ),
));

endif;
