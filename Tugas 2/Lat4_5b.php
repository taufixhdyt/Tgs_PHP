<!-- Latihan 5 -->
<?php

require_once("lat4_5a.php");

$s = new sarjana;
$s->getProgram('Mahasiswa') . "<br>";
$s->tugasAkhir();

$m = new magister;
$m->getProgram('Mahasiswa') ."<br>";
$m->tugasAkhir();
?>

<!-- Baik dari lat4_5a.php atau lat4_5b.php jika pada lat4_5a.php dihilangkan kodenya pada baris 30-33, maka yang akan terjadi adalah error karena kekurangan brackets penutup dan fuction untuk S2 -->