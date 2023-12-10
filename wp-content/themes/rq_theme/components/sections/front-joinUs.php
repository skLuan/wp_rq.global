<section id="join_us" class="p-4">
    <div class="participant_container">
        <?= do_shortcode('[wpforms id="24"]') ?>
    </div>
    <div class="relative">
        <span class="font-bold tracking-tighter text-rqPurple text-[6.5rem] opacity-30">Join Us</span>
        <div class="absolute flex flex-col items-center w-full top-2/3">
            <h3 class="text-2xl font-bold text-center font-rqInter text-rqGreen"><?= RQ_FESTIVAL_DATE ?></h3>
            <span class="text-2xl font-bold text-rqYEllow">
                00:00:00
            </span>

        </div>
    </div>
    <div class="sponsor">
        <?= do_shortcode('[wpforms id="29"]') ?>
    </div>
    <!-- Become yout medicine -->
    <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'BECOME YOUR OWN MEDICINE']) ?>
    <figure>
        <picture>
            <img src="<?= MOCKUP_IMAGE ?>" alt="">
        </picture>
    </figure>

</section>