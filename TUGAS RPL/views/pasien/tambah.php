<?php
include_once '../../config.php';
include_once '../../controllers/PasienController.php';
$db= new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
    
    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<h3>Tambah Data Pasien</h3>
<a class="btn btn-success" href="tampil_pasien.php">Kembali</a>
<br></br>

<form action="proses_pasien.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <select name="jenis_kelamin" >
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>No.Telp</td>
            <td><input type="text" name="no_telp"></td>
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