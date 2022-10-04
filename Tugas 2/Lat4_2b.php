<!-- Latihan 2 -->
<?php
require_once("lat4_2a.php");
$mhs2=new mahasiswa("Pennyka", "0910683073");
$mhs2->cetak();
?>

<!-- Penambahan konstruktor lagi pada kelas yang sama akan membuat program error saat dijalankan karena mengandung  double function yang menyebabkan tabrakan untuk mendeklarasikan salah satunya -->