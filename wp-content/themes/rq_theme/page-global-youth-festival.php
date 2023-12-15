<?php get_header() ?>

<?= get_template_part('components/sections/front', 'Banner') ?>

<?= get_template_part('components/sections/front', 'globalExperience') ?>

<?= get_template_part('components/sections/front', 'whatIs') ?>

<?= get_template_part('components/sections/front', 'uniqueness') ?>

<?= get_template_part('components/sections/front', 'community') ?>

<?= get_template_part('components/sections/front', 'joinUs') ?>

<?php
// while (have_posts()) {
//     the_post();
//     the_content();
// }
?>

<?php get_footer() ?>