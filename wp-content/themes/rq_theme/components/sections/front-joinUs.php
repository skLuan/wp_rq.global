<section id="join_us" class="relative grid-cols-2 gap-4 p-4 lg:grid lg:pt-16">
    <div class="relative z-10 participant_container">
        <h3 class="text-5xl font-extrabold text-center lg:mt-48 font-rqNunitoSans text-rqPurple">Become a participant</h3>
        <?= do_shortcode('[wpforms id="24"]') ?>
    </div>
    <div class="relative z-0 order-first w-full lg:text-center col-span-full lg:top-0 lg:left-0">
        <span class="font-extrabold lg:absolute left-0 -top-28 tracking-tighter text-center w-full inline-flex justify-center font-rqNunitoSans text-rqPurple text-[6.5rem] lg:text-[288px] opacity-20 lg:opacity-10">Join Us</span>
        <div class="relative flex flex-col items-center w-full -translate-y-10 lg:absolute lg:top-0">
            <h3 class="text-4xl font-extrabold lg:text-5xl font-rqNunitoSans text-rqGreen"><?= RQ_FESTIVAL_DATE ?></h3>
            <span class="text-5xl font-extrabold font-rqNunitoSans text-rqYEllow">
                00:00:00
            </span>
        </div>
    </div>
    <div class="relative z-20 sponsor">
        <h3 class="text-5xl font-extrabold text-center lg:mt-48 font-rqNunitoSans text-rqPurple">Become a sponsor</h3>
        <?= do_shortcode('[wpforms id="29"]') ?>
    </div>
    <div class="flex flex-col order-last mt-16 lg:items-center lg:justify-center lg:mt-4 lg:flex-row-reverse col-span-full">
        <!-- Become yout medicine -->
        <h2 class="pb-4 text-4xl font-extrabold text-center lg:text-left lg:my-auto lg:mr-auto lg:w-1/2 font-rqNunitoSans lg:text-7xl text-rqGreen-darker">BECOME YOUR <br> OWN MEDICINE</h2>
        <figure class="lg:w-2/4 lg:pr-4">
            <picture class="">
                <source media="(min-width: 900px)" data-srcset="<?= IMAGES_BANNERS_URL . 'ownMedBanner@2x.png' ?>">
                <img class="w-2/3 mx-auto lg:ml-auto lazy" data-src="<?= IMAGES_BANNERS_URL . 'ownMedBanner.png' ?>" alt="">
            </picture>
        </figure>
    </div>

</section>