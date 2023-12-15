<section id="youth_community" class="flex-col lg:flex">
    <div class="w-full bg-rqPurple">
        <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Youth Community', 'classes' => '!py-8 !bg-rqPurple !text-rqWhite']) ?>
        <?= get_template_part('components/swipers/swipe', 'community') ?>
    </div>

    <div class="py-16 mt-1 mb-16 bg-rqGreen">
        <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Event Partners', 'classes' => '!text-rqWhite !pb-8']) ?>
        <?= get_template_part('components/swipers/swipe', 'partners') ?>
    </div>
</section>