<?php
// ----------------------------------- Pillars
function pillars_registry()
{
    $labels = array(
        'name'                  => _x('Pillars', 'General name of the post type', 'text-domain'),
        'singular_name'         => _x('Pillar', 'Singular name of the post type', 'text-domain'),
        'menu_name'             => __('Pillars', 'text-domain'),
        'add_new'               => __('Add New Pillar', 'text-domain'),
        'add_new_item'          => __('Add New Pillar', 'text-domain'),
        'edit_item'             => __('Edit Pillar', 'text-domain'),
        'new_item'              => __('New Pillar', 'text-domain'),
        'view_item'             => __('View Pillar', 'text-domain'),
        'view_items'            => __('View Pillars', 'text-domain'),
        'search_items'          => __('Search Pillars', 'text-domain'),
        'not_found'             => __('No Pillars found', 'text-domain'),
        'not_found_in_trash'    => __('No Pillars found in trash', 'text-domain'),
    );


    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-format-quote', // Puedes cambiar el ícono, mira la lista aquí: https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'rewrite'               => array('slug' => 'pillars'), // Cambia 'preguntas-frecuentes' al slug que prefieras.
    );

    register_post_type('pillar', $args);
}
?>