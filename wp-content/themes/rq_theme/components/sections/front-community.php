<section id="youth_community" class="">
    <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Youth Community']) ?>
    <?= get_template_part('components/swipers/swipe', 'community') ?>

    <div class="mt-24 mb-16">
        <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Event Partners']) ?>
        <?= get_template_part('components/swipers/swipe', 'partners') ?>
    </div>
</section>