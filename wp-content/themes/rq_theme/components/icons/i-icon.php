<?php
if (isset($args['iconifyI'])) {
    $iconify = $args['iconifyI'];
} else {
    $iconify = 'tabler:triangles';
}

$args['classes'] ? $classes = $args['classes'] : $classes = '';
$w = 'w-36';
$h = 'h-36';
?>
<div class="flex <?= $classes ?> bg-gray-100 rounded-full <?= $w ?> <?= $h ?> ico">
    <iconify-icon class="m-auto text-6xl text-rqPurple" icon="<?= $iconify ?>"></iconify-icon>
</div>