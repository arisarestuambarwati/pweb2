<?php

include_once '../../config.php';
include_once '../../controllers/PasienController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $result = $pasienController->deletePasien($id);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Gagal menghapus data";
    }
}