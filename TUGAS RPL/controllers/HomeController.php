<?php
class HomeController{
    public function home()
    {
        header("location:http://localhost/pweb2/TUGAS RPL/index.php");
    }
    public function pasien()
    {
        header("location:http://localhost/pweb2/TUGAS RPL/views/pasien/index.php");
    }
}
?>