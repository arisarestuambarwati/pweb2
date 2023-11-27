<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

//instansiasikan class database 
$database=new database;
$db = $database ->getKoneksi();

$dosenController = new DosenController($db);
$dosen= $dosenController->getAllDosen();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIAKAD</title>
</head>
<br>
<body>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
    <div class="px-3 py-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SIAKAD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="dosen">Dosen</a>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>  
<div class="container">
        <h3>Data Dosen</h3>
        <a href="tambah" class="btn btn-success">Tambah Dosen</a>
        <br>
        <table class="table">
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            foreach ($dosen as $x) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['tempat_lahir'] ?></td>
                    <td><?php echo $x['tanggal_lahir'] ?></td>
                    <td><?php echo $x['jenis_kelamin'] ?></td>
                    <td><?php echo $x['agama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a href="edit?id=<?php echo $x['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus?id=<?php echo $x['id']; ?>"
                        onclick="return confirm('Apakah yakin akan menghapus..?')" class="btn btn-danger">Hapus</a>
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
