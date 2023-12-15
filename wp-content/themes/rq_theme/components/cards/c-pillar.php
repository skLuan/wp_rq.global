<?php
$args['slug'] ? $slug = $args['slug'] : $slug = 'slug';
$args['title'] ? $title = $args['title'] : $title = 'title';
// $args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description'] ? $description = $args['description'] : $description = 'where goes desp';
?>
<div id="pCard_<?= $slug ?>" class="absolute left-0 z-30 hidden p-4 py-8 bg-white rounded-md shadow-md bottom-full card_pillar">
    <h3 class="text-4xl text-rqGreen-darker"><?= $title ?></h3>
    <p class="py-4 leading-tight">
    <?= $description ?>
    </p>
</div>