<?php
// Memanggil class database
include '../classes/database.php';
// Instansiasi class database
$db = new Database;
?>

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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Dosen</a>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'Berhasil') {
        ?>
        <div class="alert alert-success mx-auto text-center" style="width:20%" role="alert">
            Data <a href="#" class="alert-link">BERHASIL</a> di tambahkan
        </div>
        <?php
        header("refresh:2,url=tampil_mhs.php");
    } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'Sukses') {
        ?>
        <div class="alert alert-success mx-auto text-center" style="width:15%" role="alert">
            Data <a href="#" class="alert-link">SUKSES</a> di edit
        </div>
        <?php
        header("refresh:2,url=tampil_mhs.php");
    } else if (isset($_GET['pesan']) && $_GET['pesan'] == 'Done') {
        ?>
        <div class="alert alert-success mx-auto text-center" style="width:18%" role="alert">
            Data <a href="#" class="alert-link">DONE</a> di hapus
        </div>
        <?php
        header("refresh:2,url=tampil_mhs.php");
    }
    ?>


    <div class="px-5">
        <h3>Data Mahasiswa</h3>
        <a href="input_mhs.php" class="btn btn-primary mb-2 mt-2">Tambah Mahasiswa</a>
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
        </div>
        </div>

        <!-- Tambahkan jQuery dan Bootstrap JavaScript di sini jika diperlukan -->
        <!-- Pastikan Anda menggunakan versi Bootstrap yang sesuai dengan saat kode Anda ditulis -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"></script>
    </
