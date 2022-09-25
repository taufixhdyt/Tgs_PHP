<?php
class BaseClass {
	public function monyet() {
		echo "Monyet merupakan salah satu dari jenis Hewan,";
	}
}
class Monyet extends BaseClass {
	function kata2() {
		echo "\n Monyet mempunyai kemampuan untuk Berjalan";
	}
	function kata3() {
		echo "\n Makan dan Bersuara,";
	}
	function kata4() {
		echo "\n tapi suatu saat Monyet apabila dilatih akan bisa Berkendara seperti naik sepeda yang tidak dipunyai oleh hewan lainnya.";
	}
}
$Monyet = new Monyet;
$Monyet->monyet();
$Monyet->kata2();
$Monyet->kata3();
$Monyet->kata4();
?>
