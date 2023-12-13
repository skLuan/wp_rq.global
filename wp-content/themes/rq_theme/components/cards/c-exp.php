<?php
$args['title'] ? $title = $args['title'] : $title = 'title';
$args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description'] ? $description = $args['description'] : $description = 'where goes desp';
?>
<div class="grid-cols-2 col-span-11 my-8 lg:grid card_exp">
    <figure class="bg-gray-300 overflow-hidden rounded-lg h-[200px] lg:h-full relative">
        <picture class="">
            <img src="<?= $urlImg ?>" alt="">
        </picture>
        <h5 class="absolute bottom-0 w-full pb-4 text-4xl font-bold text-center lg:hidden drop-shadow-sm text-rqYEllow"><?= $title ?></h5>
    </figure>
    <div class="px-4 py-8 m-auto lg:w-5/6">
        <h4 class="hidden pb-8 text-4xl font-bold text-center lg:block drop-shadow-sm text-rqYEllow lg:text-rqGreen-darker"><?= $title ?></h4>
        <p class="text-rqPurple-darker">
            <?= $description ?>
            <!-- Music is the universal language that carries the power to inspire, heal, and unite people from all walks of life. We wish to impact our next generation through blissful vibrations necessary to create Connected Leaders. -->
        </p>
    </div>
</div>