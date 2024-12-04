<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../style.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body class="bg-[#D9D9D9] font-sans">
    <?php include "sidebar.php"; ?>
    <section class="flex flex-col flex-1">
        <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
            Data Submisi > Data Pembimbing</h4>
        <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">
            <span class="flex flex-col gap-8">
                <table id="dynamicTable" class="border-separate border-spacing-1">
                    <tr>
                        <th class="bg-gray-400 rounded">No</th>
                        <th class="bg-gray-400 rounded">Dosen</th>
                        <th class="bg-gray-400 rounded">Peran</th>
                        <th class="bg-gray-400 rounded">Hapus</th>
                    </tr>
                    <tr>
                        <td class="text-center bg-gray-200 rounded py-3">
                            1
                        </td>
                        <td class="bg-gray-200 rounded p-3">
                            <select class="w-full select2">
                                <!-- Opsi untuk nama mahasiswa -->
                                <option value="Jono">Jono</option>'
                                <option value="Joni">Joni</option>'
                                <option value="Jini">Jini</option>'
                                <!-- ambil dari db -->
                            </select>
                        </td>
                        <td class="bg-gray-200 rounded p-3 w-96">
                            <select class="w-full">
                                <option value="Membimbing mahasiswa menghasilkan produk saintifik bereputasi dan mendapat pengakuan tingkat Internasional">Membimbing mahasiswa menghasilkan produk saintifik bereputasi dan mendapat pengakuan tingkat Internasional</option>
                                <option value="Membimbing mahasiswa mengikuti kompetisi dibidang akademik dan kemahasiswaan bereputasi dan mencapai juara tingkat Nasional">Membimbing mahasiswa mengikuti kompetisi dibidang akademik dan kemahasiswaan bereputasi dan mencapai juara tingkat Nasional</option>
                                <!-- ambil dari db -->
                            </select>

                        </td>
                        <td class=" bg-gray-200 rounded  w-20">
                            <div class="grid place-items-center">
                                <button class="flex items-center rounded-md w-fit text-white bg-red-400 p-1">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
                <button id="addRowBtn" class="bg-[#31E266] text-white p-3 w-fit rounded-md flex">
                    <span class="material-symbols-outlined">add</span>
                </button>
            </span>
            <span class="flex flex-row-reverse relative gap-3">
                <button class="flex rounded-md  w-fit p-3 text-white bg-[#31E266] [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>LANJUT</p>
                    <span class="material-symbols-outlined">
                        arrow_forward
                    </span>
                </button>
                <button class="flex rounded-md  w-fit p-3 text-white bg-gray-400 [box-shadow:0em_0.3em_0.3em#bcbcbc]">
                    <p>KEMBALI</p>

                </button>
            </span>

        </main>
    </section>

    <script src="" async defer></script>
</body>

</html>