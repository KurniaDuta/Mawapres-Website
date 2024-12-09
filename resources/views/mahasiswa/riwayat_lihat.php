<?php
$title = "Riwayat Submisi > Detail Kompetisi";
$description = "Riwayat Submisi";
include "../../layouts/mahasiswa.php";

enum Status
{
    case Ditolak;
    case Diterima;
    case Proses;
}

$dataToShow = [
    'nama_kompetisi' => 'Nama Kompetisi',
    'tanggal_mulai' => '2020-12-30',
    'tanggal_selesai' => '2020-12-30',
    'penyelenggara' => 'Kemendigix',
    'jenis_kompetisi' => 'Non Akademikx',
    'tingkat_kompetisi' => 'Internasionalx',
    'juara_kompetisi' => 'Juara Pertamax',
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

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="nama_kompetisi" class="">Nama Kompetisi</label>
                </div>
                <p class="text-sm text-gray-400">Nama kompetisi yang tertera di dokumen-dokumen bukti.</p>

                <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                    <?php echo $dataToShow['nama_kompetisi'] ?>
                </section>

            </span>
            <span class="flex flex-1 gap-16">
                <div class="flex flex-col flex-1">
                    <div class="flex">
                        <label for="tanggal_mulai" class="">Tanggal Mulai</label>
                    </div>
                    <p class="text-sm text-gray-400">Tanggal kompetisi dimulai.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['tanggal_mulai'] ?>
                    </section>

                </div class="flex flex-col">
                <div class="flex flex-col flex-1">
                    <div class="flex">
                        <label for="tanggal_selesai" class="">Tanggal Selesai</label>
                    </div>
                    <p class="text-sm text-gray-400">Tanggal kompetisi selesai.</p>

                        <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                            <?php echo $dataToShow['tanggal_selesai'] ?>
                        </section>

                </div>
            </span>
            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="penyelenggara" class="">Penyelenggara</label>
                </div>
                <p class="text-sm text-gray-400">Tulis penyelenggara yang tertera pada dokumen-dokumen bukti.</p>

                <!-- input or show -->
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['penyelenggara'] ?>
                    </section>
            </span>
            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="jenis_kompetisi" class="">Jenis Kompetisi</label>
                </div>
                <p class="text-sm text-gray-400">Pilih jenis di bawah yang paling cocok dengan kompetisimu.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['jenis_kompetisi'] ?>
                    </section>
            </span>
            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="tingkat_kompetisi" class="">Tingkat Kompetisi</label>
                </div>
                <p class="text-sm text-gray-400">Pilih tingkat di bawah yang paling cocok dengan kompetisimu.</p>

                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['tingkat_kompetisi'] ?>
                    </section>
            </span>
            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="juara_kompetisi" class="">Juara Kompetisi</label>
                </div>
                <p class="text-sm text-gray-400">Pilih juara di bawah yang paling cocok dengan kompetisimu.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['juara_kompetisi'] ?>
                    </section>
            </span>

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <h4 class="">URL Kompetisi</h4>
                </div>
                <p class="text-sm text-gray-400">Tulis URL publikasi penyelenggara kompetisi.</p>

                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['url_kompetisi'] ?>
                    </section>
            </span>

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <h4 class="">Jumlah Peserta</h4>
                </div>
                <p class="text-sm text-gray-400">Tulis jumlah peserta yang mengikuti kompetisi.</p>

                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['jumlah_peserta'] ?>
                    </section>
            </span>

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="jumlah_pt" class="">Jumlah PT</label>
                </div>
                <p class="text-sm text-gray-400">Tulis jumlah perguruan tinggi yang mengikuti kompetisi.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['jumlah_pt'] ?>
                    </section>
            </span>

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="nomor_surat_tugas" class="">Nomor Surat Tugas</label>
                </div>
                <p class="text-sm text-gray-400">Tulis nomor surat tugas.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['nomor_surat_tugas'] ?>
                    </section>
            </span>

            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label for="tanggal_surat_tugas" class="">Tanggal Surat Tugas</label>
                </div>
                <p class="text-sm text-gray-400">Tanggal surat tugas diberikan.</p>
                    <section class="p-2 h-14 w-full [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center">
                        <?php echo $dataToShow['tanggal_surat_tugas'] ?>
                    </section>
            </span>


            <span class="flex flex-col gap-2">
                <div class="flex">
                    <label class="">Keanggotaan</label>
                </div>
                <p class="text-sm text-gray-400">Mahasiswa dan peran.</p>
                <table class="border-separate border-spacing-3">
                    <tr>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                            2341720183 - Muhammad Erril
                        </td>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg text-center">
                            Ketua
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                            2341720183 - Muhammad Erril
                        </td>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg text-center">
                            Ketua
                        </td>
                    </tr>
                </table>

                <p class="text-sm text-gray-400 mt-5">Dosen dan peran.</p>
                <table class="border-separate border-spacing-3">
                    <tr>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                            199111282019031013 - Dika Rizky Yunianto, S. Kom., M.Kom
                        </td>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg text-center">
                            Membimbing mahasiswa menghasilkan....
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg">
                            199111282019031013 - Dika Rizky Yunianto, S. Kom., M.Kom
                        </td>
                        <td class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg text-center">
                            Membimbing mahasiswa menghasilkan....
                        </td>
                    </tr>
                </table>

            </span>
            <span>
                <div class="flex">
                    <label class="">Lampiran</label>
                </div>
                <p class="text-sm text-gray-400">File surat tugas.</p>
                <div class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center justify-between">
                    <p>SuratTugas.pdf</p>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 14.25V18.5833C20.75 19.158 20.5217 19.7091 20.1154 20.1154C19.7091 20.5217 19.158 20.75 18.5833 20.75H3.41667C2.84203 20.75 2.29093 20.5217 1.8846 20.1154C1.47827 19.7091 1.25 19.158 1.25 18.5833V14.25M5.58333 8.83333L11 14.25M11 14.25L16.4167 8.83333M11 14.25V1.25" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <p class="text-sm text-gray-400 mt-5">File surat tugas.</p>
                <div class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center justify-between">
                    <p>Sertifikat.pdf</p>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 14.25V18.5833C20.75 19.158 20.5217 19.7091 20.1154 20.1154C19.7091 20.5217 19.158 20.75 18.5833 20.75H3.41667C2.84203 20.75 2.29093 20.5217 1.8846 20.1154C1.47827 19.7091 1.25 19.158 1.25 18.5833V14.25M5.58333 8.83333L11 14.25M11 14.25L16.4167 8.83333M11 14.25V1.25" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <p class="text-sm text-gray-400 mt-5">File surat tugas.</p>
                <div class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center justify-between">
                    <p>Poster.pdf</p>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 14.25V18.5833C20.75 19.158 20.5217 19.7091 20.1154 20.1154C19.7091 20.5217 19.158 20.75 18.5833 20.75H3.41667C2.84203 20.75 2.29093 20.5217 1.8846 20.1154C1.47827 19.7091 1.25 19.158 1.25 18.5833V14.25M5.58333 8.83333L11 14.25M11 14.25L16.4167 8.83333M11 14.25V1.25" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

                <p class="text-sm text-gray-400 mt-5">File surat tugas.</p>
                <div class="p-2 h-14 [box-shadow:0em_0.3em_0.3em#bcbcbc] rounded-lg flex items-center justify-between">
                    <p>KegiatanLomba.pdf</p>
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.75 14.25V18.5833C20.75 19.158 20.5217 19.7091 20.1154 20.1154C19.7091 20.5217 19.158 20.75 18.5833 20.75H3.41667C2.84203 20.75 2.29093 20.5217 1.8846 20.1154C1.47827 19.7091 1.25 19.158 1.25 18.5833V14.25M5.58333 8.83333L11 14.25M11 14.25L16.4167 8.83333M11 14.25V1.25" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </div>

            </span>
            <span class="text-red-500 flex justify-between">
                <div class="flex flex-row-reverse gap-3 w-full">
                    <?php if ($dataToShow['status'] == Status::Ditolak) : ?>
                        <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-[#5088DA] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                            <p>EDIT</p>
                        </button>
                    <?php endif; ?>
                    <button class="flex rounded-md  w-fit py-3 px-6 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                        <p>KEMBALI</p>
                    </button>
                </div>
            </span>
        </main>
    </section>

</body>