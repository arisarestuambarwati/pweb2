<?php

include_once '../../config.php';
include_once '../../controllers/DokterController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dokterController = new DokterController($db);
    $dokterData = $dokterController->getDokterById($id);

    if ($dokterData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $spesialis = $_POST['spesialis'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];
            $alamat = $_POST['alamat'];

            $result = $dokterController->updateDokter($id, $nama, $spesialis, $email, $no_telp, $alamat);

            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit.php");
            }

        }
    } else {
        echo "Dokter tidak ditemukan";
    }
}
?>
<h3>Edit Data Dokter</h3>
<?php
if ($dokterData) {
?>
    <form action="" method="post">
        <?php
        foreach ($dokterData as $d => $value) {
        ?>
            <table border="0">
                <tr>
                    <td width="100">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
            <?php
        }
            ?>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>