<!-- Latihan 1 -->

<?php
//class mobil
class Mobil {
    public $nama;
    public $merk;

    function getInfo($a){
        echo "Nama mobil: ".$a->nama."<br/>";
        echo "Merk: ".$a->merk."<br/>";
    }
}
    // bagian main
    $ferari=new Mobil();
    $ferari->nama="Roma";
    $ferari->merk="Ferari";

    $ferari->getInfo($ferari);
?>

<!-- Saat menggunakan method overload dengan parameter $a ketika dijalankan maka akan menemui error karena paramter $a belum terdefinisikan -->


