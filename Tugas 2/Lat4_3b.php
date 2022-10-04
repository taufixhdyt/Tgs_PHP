<!-- Latihan 3 -->
<?php
require_once("lat4_3a.php");

$mhs1=new mahasiswa();
echo $mhs1->getNama();
?>

<!-- Program Lat4_3b.php error dijalankan karena mengandung variabel private yang mana hanya bisa diakses didalam class saja, sedangkan diluar kelas harus menggunakan public. Sementara itu untuk protected hanya bisa diakses inheritance menggunakan "extends".
Kode ini sudah saya edit sehingga bisa menampilkan nama meskipun dalam private -->