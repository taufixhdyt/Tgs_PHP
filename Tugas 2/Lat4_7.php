<!-- Latihan 7 -->
<?php
class A {
    public function disp() {
        echo "Inside the final function";
    }
}
class B extends A {
    public function disp() {
        echo "Inside the final function";
    }
}

$obj=new B();
$obj->disp();
?>

<!-- final method membuat error karena pada method ini tidak bisa mewarisi. Untuk menghindari hal tersebut, maka final bisa dihapus -->