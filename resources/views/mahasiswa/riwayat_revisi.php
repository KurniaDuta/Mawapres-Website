<?php
$title = "Revisi Submisi";
$description = "Riwayat Submisi";
include "../../layouts/mahasiswa.php";

enum Status
{
    case Ditolak;
    case Diterima;
    case Proses;
}

$dataToShow = [
    'nama_kompetisi' => 'Gemastik',
    'tanggal_mulai' => '2020-12-30',
    'tanggal_selesai' => '2020-12-30',
    'penyelenggara' => 'Kemendikbud',
    'jenis_kompetisi' => 'Non Akademik',
    'tingkat_kompetisi' => 'Internasional',
    'juara_kompetisi' => 'Juara Kedua',
    'url_kompetisi' => 'https://',
    'jumlah_peserta' => '20',
    'jumlah_pt' => '10',
    'nomor_surat_tugas' => '123',
    'tanggal_surat_tugas' => '2020-12-31',
    'status' => Status::Ditolak,
];
?>

<body class="bg-[#D9D9D9] font-sans">
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium py-3 text-[#4A68FF] ml-[340px]">
            <?php echo $title; ?>
        </h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">

            <?php 
            $isAdmin =false;
            include "../modular_submisi.php"?>
        </main>
    </section>

</body>