<?php
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
?>