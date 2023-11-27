<?php

class Dokter
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllDokter()
    {
        $query = "SELECT * FROM dokter";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDokter($nama, $spesialis, $email, $no_telp, $alamat)
    {
        $query = "INSERT INTO dokter (nama, spesialis, email, no_telp, alamat)
        VALUES('$nama', '$spesialis', '$email', '$no_telp', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        }else {
            return false;
        }
    }

    public function getDokterById($id)
    {
        $query="SELECT * FROM dokter wher id= $id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateDokter($nama, $spesialis, $email, $no_telp, $alamat)
    {
       $query="UPDATE dokter set nama='$nama', spesialis='$spesialis', email='$email',
       no_telp='$no_telp', alamat='$alamat' WHERE id='$id";
       $result = mysqli_query($this->koneksi, $query);
       if ($result) {
            return true;
       }else {
            return false;
       }
    }

    public function deleteDokter($id){
        $query = "DELETE FOM dokter WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        }else {
            return false;
        }
    }
}