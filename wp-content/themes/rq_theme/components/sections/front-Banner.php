<section id="front_Banner" class="relative">
    <figure class="h-[120%] bg-gray-300">
        <picture class="">
            <source media="(min-width: 900px)" srcset="<?= IMAGES_BANNERS_URL . 'principalBanner_desktop.png' ?>" type="image/png">
            <img class="w-full" src="<?= IMAGES_BANNERS_URL . 'principalBanner.png' ?>" alt="">
        </picture>
    </figure>
    <!-- contendor del title y la info de abajo -->
    <div class="absolute top-0 left-0 flex flex-col items-center w-full h-full grid-cols-12 px-2 pt-8 lg:items-start gap-y-0 lg:grid">
        <div class="col-span-5 col-start-2">
            <h2 class="text-4xl font-bold leading-none text-center lg:text-left lg:text-5xl lg:leading-tight font-rqNunitoSans text-rqPurple">The Future of <br><span class="text-[44px] lg:text-[80px] font-extrabold">Youth Festivals</span></h2>
            <p class="mt-4 text-4xl font-extrabold text-center counter lg:hidden drop-shadow-sm font-rqNunitoSans text-rqGreen">
                00:00:00
            </p>
            <h3 class="text-lg font-bold text-center lg:hidden drop-shadow-sm font-rqNunito text-rqGreen"><?= RQ_FESTIVAL_DATE ?></h3>
            <p class="mt-4 text-lg leading-tight text-center lg:mt-0 lg:px-4 lg:text-xl lg:text-left text-rqPurple">
                A space where youth will be guided to feel limitless; and free to be their authentic selves, all while learning to be conscious leaders capable of making a positive impact on the world.
            </p>
            <p class="hidden mt-4 text-5xl font-extrabold text-center counter lg:mt-24 lg:block drop-shadow-sm font-rqNunitoSans text-rqGreen">
                00:00:00
            </p>
            <h3 class="hidden text-lg font-bold text-center lg:block lg:text-2xl drop-shadow-sm font-rqNunito text-rqGreen"><?= RQ_FESTIVAL_DATE ?></h3>
            <!-- <div class="flex flex-col text-center mt-28 lg:mt-8">
                <label class="text-sm shadow-sm text-rqWhite-Silver lg:text-rqPurple-darker" for="">For more information subscribe</label>
                <input class="p-2 px-4 rounded-full" type="text" placeholder="This does anything">
                <button class="w-2/3 py-2 mx-auto mt-2 font-bold text-center rounded-full bg-rqYEllow lg:bg-rqGreen-saturated text-rqGreen-darker">Subscribe</button>
            </div> -->
            <div class="relative z-10 banner_participant_container">
                <div class="mt-8 engage-hub-form-embed" id="eh_form_6619557284544512" data-id="6619557284544512"> </div>
               <?php // do_shortcode('[wpforms id="24"]') 
                ?>
                <!-- <h6 class="text-sm text-center shadow-sm text-rqWhite-Silver lg:text-rqPurple-darker">For more information subscribe</h6> -->
            </div>
        </div>
        <h2 class="font-black text-center col-span-10 col-start-2 drop-shadow-md mt-auto text-6xl lg:text-[116px] text-rqWhite-Silver leading-[3.6rem] lg:leading-none">YOUNG CONSCIOUS LEADERS FESTIVAL</h2>
    </div>
</section>