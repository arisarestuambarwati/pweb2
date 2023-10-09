<?php
// Membuat class mahasiswa

class Mahasiswa
{
    // Property private
    private $nim = "220202030";

    // Public method
    public function tampilkan_nama(){
        // Nilai kembalian
        return "Nama saya Ara </br>";
    }

    // Metode getter untuk mengakses property nim
    public function getNim(){
        return $this->nim;
    }
}

// Membuat class Turunan dari Mahasiswa
class MahasiswaTurunan extends Mahasiswa
{
    // Public method di kelas turunan
    public function tampilkan_nim_turunan(){
        return "NIM saya " . $this->getNim();
    }
}

// Instansiasi objek mahasiswa ke dalam variabel mahasiswa
$mahasiswa = new Mahasiswa();
echo $mahasiswa->tampilkan_nama();

// Instansiasi objek MahasiswaTurunan ke dalam variabel turunan
$turunan = new MahasiswaTurunan();
echo $turunan->tampilkan_nim_turunan();
