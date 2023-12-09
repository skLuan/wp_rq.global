<?php get_header() ?>


<section id="front_Banner">
    <div class="relative">
        <figure class="bg-gray-300 pb-28">
            <picture class="">
                <img src="<?= MOCKUP_IMAGE ?>" alt="">
            </picture>
        </figure>
        <!-- contendor del title y la info de abajo -->
        <div class="absolute top-0 left-0 flex flex-col items-center w-full h-full px-2 py-8">
            <h2 class="text-5xl font-bold text-center font-rqInter text-rqGreen-darker">The Future of Youth Festivals</h2>
            <div class="mt-16 text-4xl font-bold text-rqYEllow-darker">
                00:00:00
            </div>
            <p class="mt-8 text-base text-center text-gray-800">
                A space where youth will be guided to feel limitless; and free to be their authentic selves, all while being loved and held by grandmother earth.
            </p>
            <div class="flex flex-col mt-4 text-center">
                here goes the form
                <input class="p-2 px-4 rounded-full" type="text" placeholder="This does anything">
                <button class="w-2/3 py-2 mx-auto mt-4 font-bold text-center rounded-full bg-rqYEllow text-rqYEllow-darker">Subscribe</button>
            </div>


        </div>
    </div>
</section>

<section id="global_Youth_Experience" class="mt-4">
    <h2 class="text-3xl font-bold text-center font-rqInter text-rqGreen-darker">GLOBAL YOUTH FESTIVAL</h2>
    <h3 class="text-xl font-bold text-center font-rqInter text-rqGreen-darker">June 14- 21 2024</h3>
    <div class="bg-gray-300 my-10 h-[500px]">
        here comes the videos
    </div>
    <p class="px-2 text-gray-700">Your uniqueness will blossom in a space where it is honored and welcomed</p>
    <h3 class="my-4 text-2xl font-bold text-center font-rqInter text-rqGreen-darker">Experience</h3>
    <?= get_template_part('components/loops/l', 'experiences') ?>
</section>
<section id="what_is_global_festival">

</section>
<section id="why_we_are_unique">

</section>
<section id="youth_comunnity">

</section>
<section id="join_us">

</section>
<?php
// while (have_posts()) {
//     the_post();
//     the_content();
// }
?>

<?php get_footer() ?>