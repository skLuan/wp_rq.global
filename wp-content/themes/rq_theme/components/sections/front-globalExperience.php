<section id="global_Youth_Experience" class="flex flex-col mt-4">
    <div class="flex grid-cols-12 lg:grid ">
        <iframe class="w-full col-span-10 col-start-2 h-56 lg:h-[655px]" src="https://www.youtube.com/embed/uGsQw4T4udI?si=XiNpH2JGfg962rOn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </div>
    <p class="px-4 font-extralight text-center text-3xl lg:mx-auto lg:text-5xl lg:w-2/4 mt-4 tracking-[-0.12rem] leading-[2.5rem] text-rqPurple">Your uniqueness will blossom in a space where it is honored and welcomed</p>
    <!-- <h3 class="mt-16 mb-2 text-5xl font-bold text-center font-rqNunitoSans text-rqGreen">Experience</h3> -->
    <?= get_template_part('components/loops/l', 'experiences') ?>
    <div class="flex flex-col p-4">
        <p class="text-center opacity-70">Feel a safe space where there is no dream too big or too small.</p>
        <button class="w-1/3 py-2 mx-auto mt-4 font-bold text-center rounded-full bg-rqYEllow text-rqYEllow-darker">Subscribe</button>
    </div>
</section>