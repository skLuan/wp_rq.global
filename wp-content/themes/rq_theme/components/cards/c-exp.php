<?php
$args['title'] ? $title = $args['title'] : $title = 'title';
$args['url_img'] ? $urlImg = $args['url_img'] : $urlImg = MOCKUP_IMAGE;
$args['description']? $description = $args['description']: $description = 'where goes desp';
?>
<div class="card_exp">
    <figure class="bg-gray-300 overflow-hidden h-[178px] relative">
        <picture class="absolute bottom-[-72%]">
            <img src="<?= $urlImg ?>" alt="">
        </picture>
        <h5 class="absolute bottom-0 pb-4 pl-8 text-4xl font-bold text-rqGreen-darker"><?= $title ?></h5>
    </figure>
    <p class="px-4 py-8">
        <?= $description ?>
        <!-- Music is the universal language that carries the power to inspire, heal, and unite people from all walks of life. We wish to impact our next generation through blissful vibrations necessary to create Connected Leaders. -->

    </p>
</div>