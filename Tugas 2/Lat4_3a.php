<!-- Latihan 3 -->
<?php

class mahasiswa{
    private $nama = "hendra";
    private $nim;

    function __construct() {}

    function setNama($a) {
        $this->nama=$a;
    }

    function setNim ($b) {
        $this->nim=$b;
    }

    function getNama () {
        return $this->nama;
    }

    function getNim() {
        return $this->nim;
    }

    function destruct() {
    }
}
?>

<!-- Program Lat4_3b.php error dijalankan karena mengandung variabel private yang mana hanya bisa diakses didalam class saja, sedangkan diluar kelas harus menggunakan public. Sementara itu untuk protected hanya bisa diakses inheritance menggunakan "extends".
Kode ini sudah saya edit sehingga bisa menampilkan nama meskipun dalam private -->