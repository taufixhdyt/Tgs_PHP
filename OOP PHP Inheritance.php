<?php 
class Product {
    protected $price; 
    protected $name;
    protected $discount; 
    public function __construct($price, $name, $discount) {
        $this->price = $price; 
        $this->name = $name;
        $this->discount = $discount;
    } 
    public function getPrice() {
        return $this->price; 
    } 
    public function setPrice($price) {
        $this->price = $price; 
    } 
    public function getName() {
        return $this->name; 
    } 
    public function setName($name) {
        $this->name = $name; 
    }
    public function getDiscount() {
        return $this->discount; 
    } 
    public function setDiscount($discount) {
        $this->discount = $discount; 
        
    } 
}
class CDMusic extends Product {
    private $artist;
    private $genre;
    public function __construct($price, $name, $discount, $artist, $genre) {
        parent::__construct($price, $name, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
    }
    public function getArtist() {
        return $this->artist;
    }
    public function setArtist($artist) {
        $this->artist = $artist; 
    } 
    public function getGenre() {
        return $this->genre;
    }
    public function setGenre($genre) {
        $this->genre = $genre; 
    } 
}
class CDCabinet extends Product {
    private $capacity;
    private $model; 
    public function __construct($price, $name, $discount, $capacity, $model) {
        parent::__construct($price, $name, $discount);
        $this->capacity = $capacity; 
        $this->model = $model;
    }
    public function getCapacity() {
        return $this->capacity;
    }
    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }
    public function getModel() {
        return $this->model;
    }
    public function setModel($model) {
        $this->model = $model;
    }
} 
// Penampilan Hasil
$Product = new Product ('4000', 'MusicBox', '0');
echo '<b>Product</b><br>Produk ' .$Product->getName(). ' dijual dengan harga Rp ' .$Product->getPrice(). ' tanpa diskon.<br><br>';
$CDMusic = new CDMusic('1000', 'Gitar', '5', 'Keplak Khan', 'RocknRoll');
$msc = $CDMusic->getPrice() + 10*10 * 5/100;
echo '<b>CDMusic</b><br>' .$CDMusic->getArtist(). ', penyanti bergenre ' .$CDMusic->getGenre(). ' membeli ' .$CDMusic->getName(). ' dengan rincian harga Rp ' .$CDMusic->getPrice(). ' + 10% diskon ' .$CDMusic->getDiscount(). '% = Rp ' .$msc. '<br><br>';
$CDCabinet = new CDCabinet('5000', 'Toshiba', '15', '1000 GB', 'Sata');
$rck = $CDCabinet->getPrice() + 15*10; 
echo '<b>CDRack</b><br> SDD ' .$CDCabinet->getName(). ' model '.$CDCabinet->getModel(). ' ini memiliki kapasitas ' .$CDCabinet->getCapacity(). ' dijual dengan harga Rp ' .$CDCabinet->getPrice(). ' + ' .$CDCabinet->getDiscount(). '% = Rp ' .$rck. '';
?>