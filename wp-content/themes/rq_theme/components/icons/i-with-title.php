<?php
$args['title'] ? $title = $args['title'] : $title = 'title';
isset($args['reversed']) ? $reversed = 'order-last' : $reversed = 'order-first';

//$args['iconifyI']? $iconifyI = $args['iconifyI'] : $iconifyI = 'tabler:triangles';
?>
<div class="grid content-start grid-cols-1 grid-rows-auto grid-flow-dense">
    <h6 class="<?= $reversed ?> py-2 h-full inline text-3xl font-bold text-center text-rqGreen-darker"><?= $title ?></h6>
    <button type="button" class="mx-auto drop-shadow-sm btn_Pillars">
        <?= get_template_part(COMPONENTS . '/icons/i', 'icon', ['classes' => '']) ?>
    </button>
</div>