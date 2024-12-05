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
            <form class="flex flex-col gap-8" action="">
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="nama_kompetisi" class="">Nama Kompetisi</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Nama kompetisi yang tertera di dokumen-dokumen bukti.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nama_kompetisi" id="nama_kompetisi">
                </span>
                <span class="flex flex-1 gap-16">
                    <div class="flex flex-col flex-1">
                        <div class="flex">
                            <label for="tanggal_mulai" class="">Tanggal Mulai</label>
                            <p class=" text-red-500">*</p>
                        </div>
                        <p class="text-sm text-gray-400">Tanggal kompetisi dimulai.</p>
                        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_mulai" id="tanggal_mulai">
                    </div class="flex flex-col">
                    <div class="flex flex-col flex-1">
                        <div class="flex">
                            <label for="tanggal_selesai" class="">Tanggal Selesai</label>
                            <p class=" text-red-500">*</p>
                        </div>
                        <p class="text-sm text-gray-400">Tanggal kompetisi selesai.</p>
                        <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_selesai" id="tanggal_selesai">
                    </div>
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="penyelenggara" class="">Penyelenggara</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis penyelenggara yang tertera pada dokumen-dokumen bukti.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="penyelenggara" id="penyelenggara">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="jenis_kompetisi" class="">Jenis Kompetisi</label>
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
                        <label for="tingkat_kompetisi" class="">Tingkat Kompetisi</label>
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
                        <label for="juara_kompetisi" class="">Juara Kompetisi</label>
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
                        <label for="jumlah_pt" class="">Jumlah PT</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis jumlah perguruan tinggi yang mengikuti kompetisi.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="number" name="jumlah_pt" id="jumlah_pt">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="nomor_surat_tugas" class="">Nomor Surat Tugas</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tulis nomor surat tugas.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="text" name="nomor_surat_tugas" id="nomor_surat_tugas">
                </span>
                <span class="flex flex-col gap-2">
                    <div class="flex">
                        <label for="tanggal_surat_tugas" class="">Tanggal Surat Tugas</label>
                        <p class=" text-red-500">*</p>
                    </div>
                    <p class="text-sm text-gray-400">Tanggal surat tugas diberikan.</p>
                    <input class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg" type="date" name="tanggal_surat_tugas" id="tanggal_surat_tugas">
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
                    </div>
                </span>
            </form>

        </main>
    </section>

</body>