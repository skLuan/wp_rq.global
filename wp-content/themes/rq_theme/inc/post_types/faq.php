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
?>