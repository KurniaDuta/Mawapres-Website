<?php 
$title = "Riwayat Submisi";
$description = "Riwayat Submisi";
include "../../layouts/mahasiswa.php";
?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title;?></h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-col gap-8">
                <table id="dynamicTable" class="border-separate border-spacing-1">
                    <tr>
                        <th class="bg-gray-400 rounded">No</th>
                        <th class="bg-gray-400 rounded">Prestasi</th>
                        <th class="bg-gray-400 rounded">Status</th>
                    </tr>
                    <!-- include row template -->
                    <?php include "template/history_module_template.php"?>
                </table>
            </span>
        </main>
    </section>
</body>
