<?php

include_once '../../config.php';
include_once '../../controllers/DokterController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DokterController($db);
    $result = $dokterController->deleteDokter($id);

    if ($result) {
        header("location:index.php");
    } else {
        echo "Gagal menghapus data";
    }
}