<?php

include_once '../../config.php';
include_once '../../controllers/PasienController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pasienController = new PasienController($db);
    $pasienData = $pasienController->getPasienById($id);

    if ($pasienData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $email = $_POST['email'];
            $no_telp = $_POST['no_telp'];
            $alamat = $_POST['alamat'];

            $result = $pasienController->updatePasien($id, $nama, $jenis_kelamin, $email, $no_telp, $alamat);

            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit.php");
            }

        }
    } else {
        echo "Pasien tidak ditemukan";
    }
}
?>
<h3>Edit Data Pasien</h3>
<?php
if ($pasienData) {
?>
    <form action="" method="post">
        <?php
        foreach ($pasienData as $d => $value) {
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