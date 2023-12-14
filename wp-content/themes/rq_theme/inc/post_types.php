<?php

// ---------------------------- FAQs
function faq_registry()
{
    $labels = array(
        'name'                  => _x('Frequently Asked Questions', 'General name of the post type', 'text-domain'),
        'singular_name'         => _x('Frequently Asked Question', 'Singular name of the post type', 'text-domain'),
        'menu_name'             => __('Frequently Asked Questions', 'text-domain'),
        'add_new'               => __('Add New', 'text-domain'),
        'add_new_item'          => __('Add New Frequently Asked Question', 'text-domain'),
        'edit_item'             => __('Edit Frequently Asked Question', 'text-domain'),
        'new_item'              => __('New Frequently Asked Question', 'text-domain'),
        'view_item'             => __('View Frequently Asked Question', 'text-domain'),
        'view_items'            => __('View Frequently Asked Questions', 'text-domain'),
        'search_items'          => __('Search Frequently Asked Question', 'text-domain'),
        'not_found'             => __('No Frequently Asked Questions found', 'text-domain'),
        'not_found_in_trash'    => __('No Frequently Asked Questions found in trash', 'text-domain'),
    );


    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-format-chat', // Puedes cambiar el ícono, mira la lista aquí: https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'faqs'), // Cambia 'preguntas-frecuentes' al slug que prefieras.
    );

    register_post_type('faq', $args);
}

add_action('init', 'faq_registry');

// --------------------------- Experiences ej Music, Campfires

function experience_registry()
{
    $labels = array(
        'name'                  => _x('Experiences', 'General name of the post type', 'text-domain'),
        'singular_name'         => _x('Experience', 'Singular name of the post type', 'text-domain'),
        'menu_name'             => __('Experiences', 'text-domain'),
        'add_new'               => __('Add New', 'text-domain'),
        'add_new_item'          => __('Add New Experience', 'text-domain'),
        'edit_item'             => __('Edit Experience', 'text-domain'),
        'new_item'              => __('New Experience', 'text-domain'),
        'view_item'             => __('View Experience', 'text-domain'),
        'view_items'            => __('View Experiences', 'text-domain'),
        'search_items'          => __('Search Experience', 'text-domain'),
        'not_found'             => __('No Experiences found', 'text-domain'),
        'not_found_in_trash'    => __('No Experiences found in trash', 'text-domain'),
    );


    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-quote', // Puedes cambiar el ícono, mira la lista aquí: https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'experiences'), // Cambia 'preguntas-frecuentes' al slug que prefieras.
    );

    register_post_type('experience', $args);
}

add_action('init', 'experience_registry');

// ----------------------------------- Assistants
function assistants_registry()
{
    $labels = array(
        'name'                  => _x('Assistants', 'General name of the post type', 'text-domain'),
        'singular_name'         => _x('Assistant', 'Singular name of the post type', 'text-domain'),
        'menu_name'             => __('Assistants', 'text-domain'),
        'add_new'               => __('Add New Assistant', 'text-domain'),
        'add_new_item'          => __('Add New Assistant', 'text-domain'),
        'edit_item'             => __('Edit Assistant', 'text-domain'),
        'new_item'              => __('New Assistant', 'text-domain'),
        'view_item'             => __('View Assistant', 'text-domain'),
        'view_items'            => __('View Assistants', 'text-domain'),
        'search_items'          => __('Search Assistants', 'text-domain'),
        'not_found'             => __('No Assistants found', 'text-domain'),
        'not_found_in_trash'    => __('No Assistants found in trash', 'text-domain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-format-quote', // Puedes cambiar el ícono, mira la lista aquí: https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'assistants'), // Cambia 'preguntas-frecuentes' al slug que prefieras.
    );

    register_post_type('assistant', $args);
}

add_action('init', 'assistants_registry');

?>