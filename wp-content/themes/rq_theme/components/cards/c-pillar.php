<?php
$args['slug'] ? $slug = $args['slug'] : $slug = 'slug';
$args['title'] ? $title = $args['title'] : $title = 'title';
// $args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description'] ? $description = $args['description'] : $description = 'where goes desp';
?>
<div id="pCard_<?= $slug ?>" class="absolute top-0 left-0 z-30 hidden p-4 py-8 bg-white rounded-md shadow-md lg:right-3/4 lg:left-auto lg:w-2/4 lg:top-1/4 card_pillar">
    <h3 class="text-4xl text-rqGreen-darker"><?= $title ?></h3>
    <p class="py-4 leading-tight">
    <?= $description ?>
    </p>
</div>