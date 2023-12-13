<section id="why_we_are_unique" class="flex flex-col p-4">
    <?= get_template_part(COMPONENTS . '/title', 'section', ['title' => 'Why are we Unique?']) ?>
    <p class="mx-auto leading-tight lg:w-2/4">Through our 3 foundational pillars which are Insight, mother earth, and experiential learning—we combine the perfect synergy for anyone to evolve into a global conscious leader. We foster a habit of residing in a calm state of mind, crafting a journey of profound self-evolution.</p>
    <figure class="mx-auto">
        <picture>
            <img class="py-16" src="<?= TRIAD_PILLARS ?>" alt="">
        </picture>
    </figure>
    <div id="rq_container_pillars" class="relative w-full lg:w-1/3 mx-auto flex flex-col h-[470px]">
        <?= get_template_part(COMPONENTS . '/icons/i', 'icon', ['iconifyI' => 'tabler:triangles', 'classes' => 'mx-auto']) ?>
        <div id="rqg_ico_botom" class="flex flex-row justify-between w-full mt-auto">
            <?= get_template_part(COMPONENTS . '/icons/i', 'icon', ['iconifyI' => 'tabler:triangles', 'classes' => '']) ?>
            <?= get_template_part(COMPONENTS . '/icons/i', 'icon', ['iconifyI' => 'tabler:triangles', 'classes' => '']) ?>

        </div>
    </div>
</section>