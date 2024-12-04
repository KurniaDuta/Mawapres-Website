<!DOCTYPE html>
<html>

<!-- <?php include "Mawapres.id/src/frontend/common/common_head.php" ?> -->

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
</head>

<body class="bg-[#D9D9D9] font-sans">
  <?php include "sidebar.php"; ?>
  <section class="flex flex-col flex-1">
    <h4 class="text-3xl font-medium ml-10 py-3 text-[#4A68FF] ml-[340px]">
      Data Submisi > Detail Kompetisi</h4>
    <main class="bg-white flex-1 m-8 rounded-xl p-8 flex flex-col justify-between ml-[340px] min-h-[560px]">

      <span id="diterima">
        <table class="w-full border-spacing-1">
          <tr>
            <th>
              No
            </th>
            <th>
              Prestasi
            </th>
            <th>
              Detail
            </th>
            <th>
              Select
            </th>
          </tr>
          <tr>
            <td>
              1
            </td>
            <td>
              Gelatik
            </td>
            <td>
              Pen
            </td>
            <td>
              box
            </td>
          </tr>
        </table>
      </span>

    </main>
  </section>

  <script src="script.js" async defer></script>
</body>

</html>