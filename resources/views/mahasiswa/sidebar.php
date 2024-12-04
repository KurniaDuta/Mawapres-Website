<?php
include "../SidebarButton.php";

// Membuat objek SidebarButton
$sidebarButton = new SidebarButton();

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
        <div class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass(['/src/frontend/mahasiswa/index.php']); ?>">
            <span class="material-symbols-outlined"> home </span>
            &ensp;
            <h5 class="mr-3">Beranda</h5>
        </div>
        <div class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass(['/src/frontend/mahasiswa/submisi.php', '/src/frontend/mahasiswa/submisi-2.php', '/src/frontend/mahasiswa/submisi-3.php', '/src/frontend/mahasiswa/submisi-4.php']); ?>">
            <span class="material-symbols-outlined"> cloud_upload </span>
            &ensp;
            <h5 class="mr-3">Submisi</h5>
        </div>
        <div class="flex p-3 rounded-lg <?php echo $sidebarButton->getClass(['/src/frontend/mahasiswa/history.php']); ?>">
            <span class="material-symbols-outlined"> history </span>
            &ensp;
            <h5 class="mr-3">Riwayat</h5>
        </div>
        <div class="mt-72 flex justify-center text-white items-center gap-1">
            <span class="material-symbols-outlined">
                logout
            </span>
            <p>Keluar</p>
        </div>
    </section>
</aside>