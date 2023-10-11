<?php
include "../classes/database.php";
$db=new database();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SIAKAD</title>
</head>
<div class="px-3 py-3">
<h3>Edit Data Dosen</h3>
<form action="proses_dosen.php?aksi=update" method="post">
    <?php
        foreach($db->edit_dosen($_GET['id']) as $d){
    ?>
        <table>
            <tr>
                <td>NIDN</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']?>">
                    <input class="form-control" type="text" name="nidn" value="<?php echo $d['nidn']?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input class="form-control" type="text" name="nama" value="<?php echo $d['nama']?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea class="form-control" name="alamat" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
        </table>   
    <?php
    }
    ?>
</form>
</div>