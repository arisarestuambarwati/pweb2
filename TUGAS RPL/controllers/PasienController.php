<?php

include_once "../../models/Pasien.php";

class PasienController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pasien($db);
    }

    public function getAllPasien()
    {
        return $this->model->getAllPasien();
    }

    public function createPasien($nama, $jenis_kelamin, $email, $no_telp, $alamat)
    {
        return $this->model->createPasien($nama, $jenis_kelamin, $email, $no_telp, $alamat);
    }

    public function getPasienById($id)
    {
        return $this->model->getPasienById($id);
    }

    public function updatePasien($nama, $jenis_kelamin, $email, $no_telp, $alamat)
    {
        return $this->model->updatePasien($nama, $jenis_kelamin, $email, $no_telp, $alamat);
    }

    public function deletePasien($id)
    {
        return $this->model->deletePasien($id);
    }

}