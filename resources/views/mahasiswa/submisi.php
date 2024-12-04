<!DOCTYPE html>
<html>

<!-- <?php include "Mawapres.id/src/frontend/common/common_head.php"?> -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet" />
</head>

<body class="bg-[#D9D9D9] font-sans">
    <?php include "sidebar.php"; ?>
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            Data Submisi > Detail Kompetisi</h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
            <form class="flex flex-col gap-8" action="">
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Nama Kompetisi</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Nama kompetisi yang tertera di dokumen-dokumen bukti.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nama_kompetisi" id="">
                </span>
                <span class="flex flex-1 gap-16">
                    <div class="flex flex-col flex-1">
                        <div class="flex">
                            <h4 class="">Tanggal Mulai</h4>
                            <p class=" text-red-500">*</p>
                        </div>
                        <p class="text-sm text-gray-400">Tanggal kompetisi dimulai.</p>
                        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_mulai" id="">
                    </div class="flex flex-col">
                    <div class="flex flex-col flex-1">
                        <div class="flex">
                            <h4 class="">Tanggal Selesai</h4>
                            <p class=" text-red-500">*</p>
                        </div>
                        <p class="text-sm text-gray-400">Tanggal kompetisi selesai.</p>
                        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_selesai" id="">
                    </div>
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Penyelenggara</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis penyelenggara yang tertera pada dokumen-dokumen bukti.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="penyelenggara" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Jenis Kompetisi</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Pilih jenis di bawah yang paling cocok dengan kompetisimu.</p>
                    <select name="jenis_kompetisi" id="jenis_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                        <option value="Akademik">Akademik</option>
                        <option value="Non Akademik">Non Akademik</option>
                        <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

                    </select>
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Tingkat Kompetisi</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Pilih tingkat di bawah yang paling cocok dengan kompetisimu.</p>
                    <select name="tingkat_kompetisi" id="tingkat_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internasional</option>
                        <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

                    </select>
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Juara Kompetisi</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Pilih juara di bawah yang paling cocok dengan kompetisimu.</p>
                    <select name="juara_kompetisi" id="juara_kompetisi" class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                        <option value="Juara Pertama">Juara Pertama</option>
                        <option value="Juara Kedua">Juara Kedua</option>
                        <!-- TODO: CONNECT KE TABLE DI DB SUPAYA OPTION DINAMIS -->

                    </select>
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">URL Kompetisi</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis URL publikasi penyelenggara kompetisi.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="url_kompetisi" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Jumlah Peserta</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis jumlah peserta yang mengikuti kompetisi.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="number" name="jumlah_peserta" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Jumlah PT</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis jumlah perguruan tinggi yang mengikuti kompetisi.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="number" name="jumlah_pt" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Nomor Surat Tugas</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis nomor surat tugas.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nomor_surat_tugas" id="">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <h4 class="">Tanggal Surat Tugas</h4>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tanggal surat tugas diberikan.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_surat_tugas" id="">
                </span>
                <span class="text-red-500 flex justify-between">
                    <p>
                        *Wajib diisi.
                    </p>
                    <div class="flex gap-3">
                        <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                            <p>LANJUT</p>
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </button>
                        <!-- <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                            <p>LANJUT</p>
                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </button> -->
                    </div>
                </span>
            </form>

        </main>
    </section>

    <script src="script.js" async defer></script>
</body>

</html>