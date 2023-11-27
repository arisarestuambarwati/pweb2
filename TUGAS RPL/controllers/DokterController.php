<?php

include_once "../../models/Dokter.php";

class DokterController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Dokter($db);
    }

    public function getAllDokter()
    {
        return $this->model->getAllDokter();
    }

    public function createDokter($nama, $spesialis, $email, $no_telp, $alamat)
    {
        return $this->model->createDokter($nama, $spesialis, $email, $no_telp, $alamat);
    }

    public function getDokterById($id)
    {
        return $this->model->getDokterById($id);
    }

    public function updateDokter($id, $nama, $spesialis, $email, $no_telp, $alamat)
    {
        return $this->model->updateDokter($id, $nama, $spesialis, $email, $no_telp, $alamat);
    }

    public function deleteDokter($id)
    {
        return $this->model->deleteDokter($id);
    }

}