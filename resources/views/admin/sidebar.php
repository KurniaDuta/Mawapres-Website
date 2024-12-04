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
        'icon' => '<i class="fa-solid fa-person-chalkboard"></i>',
        'page_dir' => ['-'],
    ],
    [
        'name' => 'Konfigurasi Form',
        'icon' => '<i class="fa-solid fa-file-pen"></i>',
        'page_dir' => ['-'],
    ],

];

?>

<aside class="bg-[#D9D9D9] h-screen flex flex-col fixed top-0 left-0  ">
    <!-- PROFILE BOX -->
    <section class="flex items-center rounded-sm">
        <figure class="bg-[#2862C6]">
            <div class="flex gap-3 text-xs bg-[#D9D9D9] p-2 rounded-br-xl">
                <img src="../images/image.png" alt="profile" class="size-12 rounded-full object-cover" />
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