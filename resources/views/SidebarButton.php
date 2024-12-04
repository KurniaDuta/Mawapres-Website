<?php

class SidebarButton {
    public $selectedClass = "bg-white text-[#4A68FF]"; // Kelas untuk tombol aktif
    public $defaultClass = "text-white"; // Kelas default untuk tombol yang tidak aktif
    
    // Fungsi untuk mendapatkan kelas berdasarkan URL saat ini
    public function getClass($pageNames = []) {
        // Looping melalui array $pageNames untuk memeriksa kecocokan
        foreach ($pageNames as $pageName) {
            if ($_SERVER['REQUEST_URI'] === $pageName) {
                return $this->selectedClass;
            }
        }
        // Jika tidak ada yang cocok, kembalikan kelas default
        return $this->defaultClass;
    }
}
?>
