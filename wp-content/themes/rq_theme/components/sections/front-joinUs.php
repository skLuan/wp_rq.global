<section id="join_us" class="relative grid-cols-2 gap-4 p-4 lg:grid lg:pt-60">
    <div class="relative z-10 participant_container">
        <h3 class="text-5xl font-extrabold text-center font-rqNunitoSans text-rqPurple">Become a participant</h3>
        <?= do_shortcode('[wpforms id="24"]') ?>
    </div>
    <div class="relative z-0 order-first w-full lg:text-center col-span-full lg:top-0 lg:left-0">
        <span class="font-extrabold tracking-tighter font-rqNunitoSans text-rqPurple text-[6.5rem] lg:text-[142px] opacity-30">Join Us</span>
        <div class="relative flex flex-col items-center w-full -translate-y-10 lg:absolute lg:top-3/4">
            <h3 class="text-2xl font-bold font-rqNunitoSans text-rqGreen"><?= RQ_FESTIVAL_DATE ?></h3>
            <span class="text-4xl font-extrabold font-rqNunitoSans text-rqYEllow">
                00:00:00
            </span>
        </div>
    </div>
    <div class="relative z-20 sponsor">
        <h3 class="text-5xl font-extrabold text-center font-rqNunitoSans text-rqPurple">Become a sponsor</h3>
        <?= do_shortcode('[wpforms id="29"]') ?>
    </div>
    <div class="flex flex-col order-last mt-16 lg:flex-row-reverse col-span-full">
        <!-- Become yout medicine -->
        <h2 class="pb-4 pl-4 text-4xl font-extrabold text-center lg:m-auto lg:w-1/2 font-rqNunitoSans lg:text-7xl text-rqGreen-darker">BECOME YOUR OWN MEDICINE</h2>
        <figure class="lg:w-1/2">
            <picture class="">
                <source media="(min-width: 900px)" data-srcset="<?= IMAGES_BANNERS_URL . 'ownMedBanner@2x.png' ?>">
                <img class="w-full lazy" data-src="<?= IMAGES_BANNERS_URL . 'ownMedBanner.png' ?>" alt="">
            </picture>
        </figure>
    </div>

</section>