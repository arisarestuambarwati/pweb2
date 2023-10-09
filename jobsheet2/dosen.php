<?php

//membuat class
class dosen
{
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;

    //method untuk menampilkan nama
    function tampil_nama()
    {
        return "Nama saya Abda'u </br>";
    }

    //method untuk menampilkan alamat
    function tampil_prodi()
    {
        return "Saya merupakan dosen Prodi Teknik Informatika";
    }
}

//membuat objek nama_dosen
$nama_dosen=new dosen();

//menampilkan objek ke layar

echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_prodi();