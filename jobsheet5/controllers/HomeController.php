<?php

class HomeController{
    public function home()
    {
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }
    public function mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }
    public function edit_mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/edit.php");
    }
    public function hapus_mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/hapus.php");
    }
    public function tambah_mahasiswa()
    {
        header("location:http://localhost/pweb2/jobsheet5/tambah.php");
    }
    public function dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index.php");
    }
    public function edit_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/edit.php");
    }
    public function hapus_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/hapus.php");
    }
    public function tambah_dosen()
    {
        header("location:http://localhost/pweb2/jobsheet5/tambah.php");
    }
}

?>