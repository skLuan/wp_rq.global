<?php

$args = array(
    'post_type'      => 'experience', // Nombre del tipo de publicación personalizado
    'posts_per_page' => 10, // Número de publicaciones por página (ajusta según tus necesidades)
    'orderby'        => 'date', // Ordenar por fecha de publicación
    'order'          => 'ASC', // Orden descendente (puedes cambiarlo a 'ASC' para ascendente)
);

$experiences = new WP_Query($args);
if ($experiences->have_posts()) :
    while ($experiences->have_posts()) :
        $experiences->the_post();
        $args = [
            "title" => get_the_title(),
            "url_img" => wp_get_attachment_image_url(get_the_ID(), "large"),
            "description" => get_the_content(),
        ];
?>  
    <?= get_template_part('components/cards/c', 'exp', $args) ?>
<?php
    endwhile;

    // Restaurar datos de la publicación principal
    wp_reset_postdata();
else :
    // Si no se encuentran experiencias
    echo 'No se encontraron experiencias.';
endif;


?>