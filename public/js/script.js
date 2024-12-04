/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

$(document).ready(function () {
  $(".select2").select2({
    placeholder: "Pilih peran perlombaan",
    allowClear: true,
  });
});


//start submisi-2 row add
const table = document.getElementById("dynamicTable");
const addRowBtn = document.getElementById("addRowBtn");

addRowBtn.addEventListener("click", () => {
  const rowCount = table.rows.length; // Hitung jumlah baris saat ini
  const newRow = table.insertRow(); // Tambahkan baris baru

  // Kolom No
  const cell1 = newRow.insertCell(0);
  cell1.className = "text-center bg-gray-200 rounded py-3";
  cell1.innerText = rowCount; // Tampilkan nomor baris

  // Kolom Nama Mahasiswa
  const cell2 = newRow.insertCell(1);
  cell2.className = "bg-gray-200 rounded p-3";
  cell2.innerHTML = `
        <select class="w-full select2" style="width: 100%;">
            <option value="Jono">Jono</option>
            <option value="Joni">Joni</option>
            <option value="Jini">Jini</option>
        </select>
    `;

  // Kolom Peran Perlombaan
  const cell3 = newRow.insertCell(2);
  cell3.className = "bg-gray-200 rounded p-3";
  cell3.innerHTML = `
        <select class="w-full">
            <option value="Ketua">Ketua</option>
            <option value="Anggota">Anggota</option>
        </select>
    `;

  // Kolom Aksi
  const cell4 = newRow.insertCell(3);
  cell4.className = "flex justify-center bg-gray-200 rounded py-3";
  cell4.innerHTML = `
        <button class="flex rounded-md w-fit text-white bg-red-400 deleteRowBtn">
            <span class="material-symbols-outlined">delete</span>
        </button>
    `;

  // Tambahkan event listener untuk tombol hapus
  const deleteBtn = cell4.querySelector(".deleteRowBtn");
  deleteBtn.addEventListener("click", () => {
    newRow.remove();
  });
});
//end submisi-2 row add
