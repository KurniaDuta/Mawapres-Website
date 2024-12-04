<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mawapres.id</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-[#D9D9D9] font-sans flex flex-row">
    <?php include "sidebar.php"; ?>

    <!-- MAIN CONTENT -->
    <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col gap-8 ml-[340px]">
        <h1 class="text-3xl font-bold">Selamat Datang di SARIS</h1>
        <section class="flex flex-row w-full gap-[90px] ml-10 items-center">
            <div class="relative inline-block">
                <!-- Foto Profil -->
                <img
                    src="../images/image.png"
                    alt="profile"
                    class="w-64 h-64 object-cover rounded-2xl" />
                <!-- Icon add_a_photo -->
                <span class="material-symbols-outlined absolute bottom-2 right-2 bg-[#2862C6] p-3 rounded-full text-white">
                    add_a_photo
                </span>
            </div>
            <div class="flex flex-col items-center gap-8 text-2xl">
                <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                    Muhammad Erril Putra Pratidina
                </span>
                <span class="border-4 border-[#5088DA] w-[432px] p-5 rounded-xl">
                    2341720183
                </span>
            </div>
        </section>
        <section class="flex justify-center gap-32 text-xl pt-10">
            <button class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-10">
                Submisi
            </button>
            <button class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-10">
                Riwayat
            </button>
            <button class="bg-[#2862C6] text-white p-3 rounded-lg py-4 px-12">
                Ganti Password
            </button>
        </section>
    </main>

    <!-- External JS -->
    <script src="scripts/script.js"></script>
</body>

</html>