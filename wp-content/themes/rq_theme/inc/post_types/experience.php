<?php
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
?>