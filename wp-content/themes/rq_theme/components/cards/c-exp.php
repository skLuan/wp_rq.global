<?php
$args['title'] ? $title = $args['title'] : $title = 'title';
$args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description'] ? $description = $args['description'] : $description = 'where goes desp';
?>
<div class="grid-cols-2 col-span-10 col-start-2 my-2 lg:grid card_exp">
    <figure class="bg-gray-300 overflow-hidden rounded-lg h-[200px] lg:h-full relative">
        <picture class="">
            <img class="lazy" data-src="<?= $urlImg ?>" alt="">
        </picture>
    </figure>
    <h5 class="bottom-0 w-full mt-4 text-4xl font-bold text-center lg:hidden drop-shadow-sm text-rqGreen-darker"><?= $title ?></h5>
    <div class="px-4 pt-2 pb-8 m-auto lg:py-8 lg:w-5/6">
        <h4 class="hidden pb-8 text-4xl font-extrabold text-center lg:text-6xl lg:block drop-shadow-sm text-rqYEllow lg:text-rqGreen-darker"><?= $title ?></h4>
        <p class="leading-tight text-rqPurple-darker">
            <?= $description ?>
            <!-- Music is the universal language that carries the power to inspire, heal, and unite people from all walks of life. We wish to impact our next generation through blissful vibrations necessary to create Connected Leaders. -->
        </p>
    </div>
</div>