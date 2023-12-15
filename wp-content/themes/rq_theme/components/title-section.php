<?php
isset($args['title']) ? $title = $args['title'] : $title = 'title';
isset($args['classes']) ? $classes = $args['classes'] : $classes = '';
?>
<h2 class="px-8 text-[42px] lg:text-6xl leading-none font-extrabold text-center font-rqNunitoSans text-rqPurple <?= $classes ?>"><?= $title ?></h2>