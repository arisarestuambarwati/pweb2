<?php

//membuat class
class mahasiswa
{
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Ara </br>";
    }

    //method untuk menampilkan alamat
    function tampil_alamat()
    {
        return "Saya beralamat di Gandrungmangu";
    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();

//menampilkan objek ke layar

echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();