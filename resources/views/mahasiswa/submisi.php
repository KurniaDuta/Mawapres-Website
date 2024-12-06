<?php 
$title = "Data Submisi > Detail Kompetisi";
$description = "";
include "../../layouts/mahasiswa.php";?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
            <?php 
            $isAdmin = false;

            include "../modular_submisi.php"?>

        </main>
    </section>

</body>