<?php

//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    function __construct()
    {
        echo "Saya mahasiswa Teknik Informatika";
        echo "</br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }   

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Ara </br>";
    }

    function tampil_mahasiswa()
    {
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah</br>";
    }
    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        return "Saya beralamat di Gandrungmangu</br>";
    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();

//menampilkan objek ke layar

echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();
echo $nama_mahasiswa->tampil_mahasiswa();

