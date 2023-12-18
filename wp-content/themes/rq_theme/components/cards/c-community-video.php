<?php
$args['name'] ? $title = $args['name'] : $title = 'name';
$args['video_url'] ? $video_url = $args['video_url'] : $video_url = 'url_video.mp4';
?>
<!-- <figure class="mx-4 overflow-hidden rounded-md">
    <video preload="none" class="lazy" controls data-src="<?= $video_url ?>" data-poster="">
        <source type="video/mp4" data-src="<?= $video_url ?>" />
        <source type="video/ogg" data-src="lazy.ogg" />
        <source type="video/avi" data-src="lazy.avi" />
    </video>
</figure> -->

<figure class="mx-1 overflow-hidden rounded-md lg:mx-4">
    <video class="lazy" preload="metadata" controls data-src="<?= $video_url ?>" poster="">
        <source type="video/mp4" data-src="<?= $video_url ?>" />
        <!-- <source type="video/ogg" data-src="lazy.ogg" />
        <source type="video/avi" data-src="lazy.avi" /> -->
    </video>
</figure>