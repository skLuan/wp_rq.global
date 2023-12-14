<?php
$args = array(
    'post_type'      => 'assistant', // Replace with the name of your custom post type
    'posts_per_page' => -1, // To retrieve all posts, set to -1
    'order'          => 'ASC', // Order: Ascending
    'orderby'        => 'title', // Order by title
);

$assistant_query = new WP_Query($args);
?>
<!-- Slider main container -->
<div class="w-full overflow-hidden swiper swiperCommunity">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <?php
        if ($assistant_query->have_posts()) :
            while ($assistant_query->have_posts()) :
        ?>
                <div class="swiper-slide">
                    <?php
                    $assistant_query->the_post();
                    $index = $assistant_query->current_post + 1;
                    $url_video = VIDEOS_DIR . 'assistant_' . $index . '.mp4';
                    $args = [
                        'name' => get_the_title(),
                        'video_url' => $url_video,
                        'description' => get_the_content(),
                    ];
                    ?>
                    <?= get_template_part(COMPONENTS . '/cards/c', 'community-video', $args); ?>
                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo 'No video found.';
        endif; ?>

    </div>
    <!-- If we need pagination -->
    <div class="swiperCommunity-pagination swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiperCommunity-button-prev swiper-button-prev"></div>
    <div class="swiperCommunity-button-next swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiperCommunity-scrollbar swiper-scrollbar"></div>
</div>