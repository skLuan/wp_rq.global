<?php

$args = array(
    'post_type'      => 'pillar', // Nombre del tipo de publicación personalizado
    'posts_per_page' => -1, // Número de publicaciones por página (ajusta según tus necesidades)
    'orderby'        => 'date', // Ordenar por fecha de publicación
    'order'          => 'ASC', // Orden descendente (puedes cambiarlo a 'ASC' para ascendente)
);

$pillars = new WP_Query($args);
if ($pillars->have_posts()) :
?>
    <div id="container_pillar_cards" class="relative">
        <?php
        while ($pillars->have_posts()) :
            $pillars->the_post();
            $args = [
                "title" => get_the_title(),
                // "url_img" => get_the_post_thumbnail_url(get_the_ID(), "large"),
                "description" => get_the_content(),
            ];
        ?>
            <?= get_template_part(COMPONENTS . '/cards/c', 'pillar', $args) ?>

        <?php
        endwhile;
        // Restaurar datos de la publicación principal
        wp_reset_postdata();
        ?>
    </div>
<?php
else :
    // Si no se encuentran experiencias
    echo 'No Pillars founded';
endif;

?>