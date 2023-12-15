<section id="why_we_are_unique" class="relative flex flex-col p-4 mb-48">
    <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Why are we Unique?']) ?>
    <p class="mx-auto leading-tight lg:w-2/4">Through our 3 foundational pillars which are Insight, mother earth, and experiential learning—we combine the perfect synergy for anyone to evolve into a global conscious leader. We foster a habit of residing in a calm state of mind, crafting a journey of profound self-evolution.</p>
    <!-- <figure class="mx-auto">
        <picture>
            <img class="py-16" src="<?= TRIAD_PILLARS ?>" alt="">
        </picture>
    </figure> -->
    <div id="rq_container_pillars" class="relative mt-14 w-full lg:w-1/3 mx-auto flex flex-col h-[542px]">
        <?= get_template_part(COMPONENTS . '/loops/l', 'pillars') ?>
        <h3 class="absolute flex w-full h-full text-4xl font-extrabold text-center font-rqNunitoSans text-rqPurple-darker">
            <span class="block pb-8 m-auto">
                Conscious Leader
            </span>
        </h3>
        <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['title' => 'Insight', 'classes' => 'mx-auto']) ?>
        <div id="rqg_ico_botom" class="grid justify-between w-full grid-cols-2 mt-auto">
            <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['reversed' => true, 'title' => 'Experiential learning', 'classes' => '']) ?>
            <?= get_template_part(COMPONENTS . '/icons/i', 'with-title', ['reversed' => true, 'title' => 'Nature', 'classes' => '']) ?>
        </div>
    </div>
</section>