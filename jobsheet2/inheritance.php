<?php
class manusia
{
    public $nama_saya;

    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}
//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}
//instansiasi class mahasiswa
$informatika=new mahasiswa();

$informatika->panggil_nama("Arisa Restu");
$informatika->panggil_mahasiswa("Ambarwati");

//tampilkan isi dari property

echo "Nama Depan Saya : " .$informatika->nama_saya. "</br>";
echo "Nama Belakang : " .$informatika->nama_mahasiswa;