<!-- Latihan 8 -->
<?php
class One {
    private static $var="a";
    function __construct() {}
    static function disp() {
        print self::$var;
    }
    function __destruct () {}
}
One::disp();
?>

<!-- Pada latihan 8 bisa berjalan normal untuk menampilkan sebuah hasil, $var=0 bisa diganti value lain tanpa tanpa petik selagi masih angka dan diberi tanda petik jika huruf -->