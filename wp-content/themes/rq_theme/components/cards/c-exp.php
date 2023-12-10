<?php
$args['title'] ? $title = $args['title'] : $title = 'title';
$args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description']? $description = $args['description']: $description = 'where goes desp';
?>
<div class="card_exp">
    <figure class="bg-gray-300 overflow-hidden h-[200px] relative">
        <picture class="">
            <img src="<?= $urlImg ?>" alt="">
        </picture>
        <h5 class="absolute bottom-0 w-full pb-4 text-4xl font-bold text-center drop-shadow-sm text-rqYEllow"><?= $title ?></h5>
    </figure>
    <p class="px-4 py-8 text-rqPurple-darker">
        <?= $description ?>
        <!-- Music is the universal language that carries the power to inspire, heal, and unite people from all walks of life. We wish to impact our next generation through blissful vibrations necessary to create Connected Leaders. -->

    </p>
</div>