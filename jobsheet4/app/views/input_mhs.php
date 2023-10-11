<?php
include '../classes/database.php';
$db= new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    
    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<h3>Tambah Data Mahasiswa</h3>
<a class="btn btn-success" href="tampil_mhs.php">Kembali</a>
<br></br>

<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"class="btn btn-primary"></td>
            
        </tr>
    </table>
</form>