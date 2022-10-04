<!-- Latihan 6 -->
<?php
interface a {
    public function foo();
}
interface b {
    public function bar();
}
interface c extends a, b {
    public function baz();
}
class d implements c {
    public function foo() {
    }
    public function bar() {
    }
    public function baz() {
    }
}
class e extends d {
    public function foo() {
    }
    public function bar() {
    }
}
?>

<!-- Jika pada baris 17-18 dihapus, maka kode akan error saat dijalankan karena function baz termasuk implementasi dari interface C -->
