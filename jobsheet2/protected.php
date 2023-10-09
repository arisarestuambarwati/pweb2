<?php
// Membuat class mahasiswa
class Mahasiswa
{
    // Property protected dan public
    protected $nim = "220202030";

    //public method
    public function tampilkan_nama()
    {
        // Nilai kembalian
        return "Nama saya Ara </br>";
    }
    
    // Protected method
    protected function tampilkan_nim()
    {
        return "NIM saya " . $this->nim;
    }
}

// Membuat class Turunan dari Mahasiswa
class MahasiswaTurunan extends Mahasiswa
{
    // Public method di kelas turunan
    public function tampilkan_nim_turunan()
    {
        // Mengakses protected method dari kelas induk
        return $this->tampilkan_nim();
    }
}

// Instansiasi objek mahasiswa ke dalam variabel mahasiswa
$mahasiswa = new Mahasiswa();
echo $mahasiswa->tampilkan_nama();

// Instansiasi objek MahasiswaTurunan ke dalam variabel turunan
$turunan = new MahasiswaTurunan();
echo $turunan->tampilkan_nim_turunan();
