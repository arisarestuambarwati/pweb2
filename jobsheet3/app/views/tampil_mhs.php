<?php
// Memanggil class database
include '../classes/database.php';
// Instansiasi class database
$db = new Database;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIAKAD</title>
</head>
<br>
<body>
    <div class="container">
        <h3>Data Mahasiswa</h3>
        <a href="input_mhs.php" class="btn btn-success">Tambah Mahasiswa</a>
        <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($db->tampil_mahasiswa() as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
                        <a href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>  
            <?php
            }
            ?>
        </table>
    </div>

    <!-- Tambahkan link Bootstrap JavaScript di sini jika diperlukan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>
