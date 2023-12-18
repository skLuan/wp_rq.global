<footer class="flex flex-col items-center px-2 pt-8 pb-2 bg-rqPurple text-rqWhite-Silver">
    <p class="text-base leading-tight text-center lg:text-lg text-rqWhite-Silver">Our mission is to help youth feel better in themselves, grow as conscious leaders and enjoy the process while doing it</p>

    <ul class="my-8 text-3xl font-bold text-center justify-evenly lg:w-full lg:flex lg:flex-row font-rqNunitoSans">
        <li class="my-4 hover:underline hover:text-rqYEllow"><a href="#global_Youth_Experience" id="" class="">Experiences</a></li>
        <li class="my-4 hover:underline hover:text-rqYEllow"><a href="#what_is_global_festival" id="" class="">Youth Festival</a></li>
        <li class="my-4 hover:underline hover:text-rqYEllow"><a href="#why_we_are_unique" id="" class="">Pillars</a></li>
        <li class="my-4 hover:underline hover:text-rqYEllow"><a href="#youth_community" id="" class="">Community</a></li>
        <li class="my-4 hover:underline hover:text-rqYEllow"><a href="#join_us" id="" class="">Join us</a></li>
    </ul>
    <ul class="flex flex-col items-center justify-center w-full py-2 lg:justify-evenly lg:flex-row border-y border-rqWhite-Silver">
        <li class="flex items-center justify-center w-full lg:w-[unset]">
            <a href="https://discord.gg/zPUyfUJJ">
                <iconify-icon class="text-2xl" icon="logos:discord-icon"></iconify-icon>
            </a>
            <!-- <a class="ml-8" href="https://wa.me/">+1 000 0000000</a> -->
        </li>
        <li><a href="mailto:<?= EMAIL_FESTIVAL ?>"><?= EMAIL_FESTIVAL ?></a></li>
        <li>
        </li>
        <li><a href=""><?= LOCATION ?></a></li>
    </ul>
    <div class="pt-2"><span class="mx-auto">copyright 2024</span></div>
</footer>
<?php wp_footer() ?>
</body>

</html>