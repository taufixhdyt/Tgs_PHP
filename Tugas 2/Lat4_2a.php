<!-- Latihan 2 -->
<?php
Class mahasiswa{
    public $nama;
    public $nim;

    function __construct($a,$b) {
       $this->nama=$a;
       $this->nim=$b;
       echo "Kelas telah dibuat<br><br>"; 
    }
    function __construct($c,$d) {
        $this->alamat=$c;
        $this->gender=$d;
        echo "Kelas telah dibuat<br><br>"; 
    }
    function cetak() {
        echo $this->nama. "<br>" .$this->nim. "<br><br>"; 
    }

    function __destruct() {
        echo "Kelas telah dihancurkan";
    }
}
?>

<!-- Penambahan konstruktor lagi pada kelas yang sama akan membuat program error saat dijalankan karena mengandung  double function yang menyebabkan tabrakan untuk mendeklarasikan salah satunya -->