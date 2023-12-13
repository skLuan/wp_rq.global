<?php
$args['iconifyI'] ? $iconify = $args['iconifyI'] : $iconify = 'tabler:triangles';
$args['classes'] ? $classes = $args['classes'] : $classes = '';
$w = 'w-40';
$h = 'h-40';
?>
<div class="flex <?= $classes ?> bg-gray-100 rounded-full <?= $w ?> <?= $h ?> ico">
    <iconify-icon class="m-auto text-6xl text-rqPurple" icon="<?= $iconify ?>"></iconify-icon>
</div>