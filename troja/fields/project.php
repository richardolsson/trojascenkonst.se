<?php

if( function_exists('acf_add_local_field_group') ):


register_field_group(array (
    'key' => 'project_media_and_credits',
    'title' => __('Project media and credits', 'troja'),
    'fields' => array (
        array (
            'key' => 'project_media',
            'label' => __('Media', 'troja'),
            'name' => 'media',
            'prefix' => '',
            'type' => 'repeater',
            'instructions' => 'Add any number of images.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'row',
            'button_label' => __('Add image', 'troja'),
            'min' => '',
            'max' => '',
            'sub_fields' => array (
                array (
                    'key' => 'project_media_image_image',
                    'label' => __('Image', 'troja'),
                    'name' => 'image',
                    'prefix' => '',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
                array (
                    'key' => 'project_media_image_caption',
                    'label' => __('Caption', 'troja'),
                    'name' => 'caption',
                    'prefix' => '',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 2,
                    'new_lines' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
            ),
        ),
        array (
            'key' => 'project_credits',
            'label' => __('Credits', 'troja'),
            'name' => 'credits',
            'prefix' => '',
            'type' => 'repeater',
            'instructions' => 'Add any number of credit lists.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'layout' => 'row',
            'button_label' => __('Add credit list', 'troja'),
            'min' => '',
            'max' => '',
            'sub_fields' => array (
                array (
                    'key' => 'project_credits_list_title',
                    'label' => __('Title', 'troja'),
                    'name' => 'title',
                    'prefix' => '',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => 2,
                    'new_lines' => '',
                    'readonly' => 0,
                    'disabled' => 0,
                ),
                array(
                    'key' => 'project_credits_list_items',
                    'label' => __('Credits', 'troja'),
                    'name' => 'credits',
                    'prefix' => '',
                    'type' => 'repeater',
                    'instructions' => 'Add any number of people to be credited.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'button_label' => __('Add credits', 'troja'),
                    'min' => '',
                    'max' => '',
                    'sub_fields' => array (
                        array (
                            'key' => 'project_credits_list_items_item_role',
                            'label' => __('Role', 'troja'),
                            'name' => 'role',
                            'prefix' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 2,
                            'new_lines' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array (
                            'key' => 'project_credits_list_items_item_name',
                            'label' => __('Name', 'troja'),
                            'name' => 'name',
                            'prefix' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'maxlength' => '',
                            'rows' => 2,
                            'new_lines' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                    ),
                ),
            ),
        ),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'project',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
        0 => 'excerpt',
        1 => 'custom_fields',
        2 => 'discussion',
        3 => 'comments',
        4 => 'format',
        5 => 'page_attributes',
        6 => 'featured_image',
        7 => 'send-trackbacks',
    ),
));
endif;