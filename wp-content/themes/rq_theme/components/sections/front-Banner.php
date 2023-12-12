<section id="front_Banner">
    <div class="relative">
        <figure class="bg-gray-300">
            <picture class="">
                <source media="(min-width: 900px)" srcset="<?= IMAGES_BANNERS_URL . 'principalBanner_desktop.png' ?>" type="image/png">
                <img class="w-full" src="<?= IMAGES_BANNERS_URL . 'principalBanner.png' ?>" alt="">
            </picture>
        </figure>
        <!-- contendor del title y la info de abajo -->
        <div class="absolute top-0 left-0 flex flex-col items-center w-full h-full px-2 pt-8 lg:items-start">
            <h2 class="text-4xl font-bold leading-none text-center lg:text-left lg:text-5xl lg:leading-tight font-rqNunitoSans text-rqPurple">The Future of <br><span class="text-[44px] lg:text-[80px] font-extrabold">Youth Festivals</span></h2>
            <div class="mt-4 text-4xl font-bold text-rqYEllow-darker">
                00:00:00
            </div>
            <h3 class="text-base font-bold text-center font-rqNunito text-rqGreen-darker"><?= RQ_FESTIVAL_DATE ?></h3>
            <p class="mt-4 text-center text-rqPurple-darker">
                A space where youth will be guided to feel limitless; and free to be their authentic selves, all while being loved and held by grandmother earth.
            </p>
            <div class="flex flex-col text-center mt-28">
                <label class="text-sm shadow-sm text-rqWhite-Silver" for="">For more information subscribe</label>
                <input class="p-2 px-4 rounded-full" type="text" placeholder="This does anything">
                <button class="w-2/3 py-2 mx-auto mt-2 font-bold text-center rounded-full bg-rqYEllow text-rqYEllow-darker">Subscribe</button>
            </div>
            <h2 class="font-black text-center mt-auto drop-shadow-md mb-12 text-[4.1875rem] text-rqWhite-Silver leading-[3.6rem]">GLOBAL YOUTH FESTIVAL</h2>
        </div>
    </div>
</section>