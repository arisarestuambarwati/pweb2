<?php

class Pasien
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPasien()
    {
        $query = "SELECT * FROM pasien";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPasien($nama, $jenis_kelamin, $email, $no_telp, $alamat)
    {
        $query = "INSERT INTO pasien (nama, jenis_kelamin, email, no_telp, alamat)
        VALUES('$nama', '$jenis_kelamin', '$email', '$no_telp', '$alamat')";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        }else {
            return false;
        }
    }

    public function getPasienById($id)
    {
        $query="SELECT * FROM pasien wher id= $id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePasien($nama, $jenis_kelamin, $email, $no_telp, $alamat)
    {
       $query="UPDATE pasien set nama='$nama', jenis_kelamin='$jenis_kelamin', email='$email',
       no_telp='$no_telp', alamat='$alamat' where id='$id";
       $result = mysqli_query($this->koneksi, $query);
       if ($result) {
            return true;
       }else {
            return false;
       }
    }

    public function deletePasien($id){
        $query = "DELETE FOM pasien WHERE id=$id";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        }else {
            return false;
        }
    }
}