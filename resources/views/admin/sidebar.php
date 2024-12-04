<?php
include "../SidebarButton.php";

// Membuat objek SidebarButton
$sidebarButton = new SidebarButton();

$sidebarMenu = [
    [
        'name' => 'Beranda',
        'icon' => '<span class="material-symbols-outlined">home</span>',
        'page_dir' => ['/src/frontend/admin/beranda.php'],
    ],
    [
        'name' => 'Validasi',
        'icon' => '<span class="material-symbols-outlined"> task</span>',
        'page_dir' => ['/src/frontend/admin/validasi.php'],
    ],
    [
        'name' => 'Master Mahasiswa',
        'icon' => '<span class="material-symbols-outlined">school </span>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Master Dosen',
        'icon' => '<svg class="fill-white size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 384l0-128 16 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-288 56 0 64 0 16 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-16 0 0-64 192 0 0 192-192 0 0-32-64 0 0 48c0 26.5 21.5 48 48 48l224 0c26.5 0 48-21.5 48-48l0-224c0-26.5-21.5-48-48-48L368 0c-26.5 0-48 21.5-48 48l0 80-76.9 0-65.9 0c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9 120 480c0 17.7 14.3 32 32 32s32-14.3 32-32z"/></svg>
',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Konfigurasi Form',
        'icon' => '<i class="fa-solid fa-file-pen size-6"></i>',
        'page_dir' => ['-'],
    ],

];

?>

<aside class="bg-[#D9D9D9] h-screen flex flex-col fixed top-0 left-0  ">
    <!-- PROFILE BOX -->
    <section class="flex items-center rounded-sm">
        <figure class="bg-[#2862C6]">
            <div class="flex gap-3 text-xs bg-[#D9D9D9] p-2 rounded-br-xl">
                <img src="../../../public/assets/images/image.png" alt="profile" class="size-12 rounded-full object-cover" />
                <span class="flex flex-col gap-2 w-44">
                    <p class="truncate">Muhammad Erril Putra Pratidina</p>
                    <p>2341720183</p>
                </span>
            </div>
        </figure>
        <div class="bg-[#2862C6] container-fluid px-4 py-[17px] rounded-tl-xl">
            <span class="material-symbols-outlined text-white">
                left_panel_close
            </span>

        </div>
    </section>

    <!-- MENU STUFF -->
    <section class="flex flex-col px-2 py-2 rounded-tl-xl bg-[#2862C6] flex-1">
        <!-- NAVIGATION ELEMENTS -->
        <?php foreach ($sidebarMenu as $menu) : ?>
            <div class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass($menu['page_dir']); ?>">
                <?php
                echo $menu['icon'];
                ?>
                &ensp;
                <h5 class="mr-3">
                    <?php echo $menu['name']; ?>
                </h5>
            </div>
        <?php endforeach; ?>

    </section>
</aside>