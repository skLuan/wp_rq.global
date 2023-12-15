<?php

$argsP = array(
    'post_type'      => 'pillar', // Nombre del tipo de publicación personalizado
    'posts_per_page' => -1, // Número de publicaciones por página (ajusta según tus necesidades)
    'orderby'        => 'date', // Ordenar por fecha de publicación
    'order'          => 'ASC', // Orden descendente (puedes cambiarlo a 'ASC' para ascendente)
);

$pillars = new WP_Query($argsP);
if ($pillars->have_posts()) :
    while ($pillars->have_posts()) :
        $pillars->the_post();
        $btns[] = [
            "title" => get_the_title(),
            // "url_img" => get_the_post_thumbnail_url(get_the_ID(), "large"),
            "description" => get_the_content(),
            "slug" => get_post_field('post_name', get_the_ID()),
        ];
    endwhile;
    // Restaurar datos de la publicación principal
    wp_reset_postdata();
endif;
?>
<section id="why_we_are_unique" class="relative flex flex-col p-4 mb-60">
    <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Why are we Unique?']) ?>
    <p class="mx-auto leading-tight lg:w-2/4">Through our 3 foundational pillars which are Insight, mother earth, and experiential learning—we combine the perfect synergy for anyone to evolve into a global conscious leader. We foster a habit of residing in a calm state of mind, crafting a journey of profound self-evolution.</p>
    <!-- <figure class="mx-auto">
        <picture>
            <img class="py-16" src="<?= TRIAD_PILLARS ?>" alt="">
        </picture>
    </figure> -->

    <div id="rq_container_pillars" class="relative mt-14 w-full lg:w-2/4 mx-auto flex flex-col h-[542px] lg:h-[742px]">
        <?= get_template_part(COMPONENTS . '/loops/l', 'pillars') ?>
        <h3 class="absolute flex w-full h-full text-4xl font-extrabold text-center font-rqNunitoSans text-rqPurple-darker">
            <span class="block pb-8 m-auto">
                Conscious Leader
            </span>
        </h3>
        <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['title' => $btns[0]['title'], 'classes' => 'mx-auto']) ?>
        <div id="rqg_ico_botom" class="grid justify-between w-full grid-cols-2 mt-auto">
            <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['reversed' => true, 'title' => $btns[1]['title'], 'classes' => '']) ?>
            <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['reversed' => true, 'title' => $btns[2]['title'], 'classes' => '']) ?>
        </div>
    </div>
</section>