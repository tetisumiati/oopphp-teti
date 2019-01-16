<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga;

 public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0 ){
 	 $this->judul = $judul;
 	 $this->penulis = $penulis;
 	 $this->penerbit = $penerbit;
 	 $this->harga = $harga;
 }

 public function getLabel(){
 	return "$this->penulis, $this->penerbit";
 }




}

// $produk1 = new peoduk();
// $produk1-> judul = "DILAN";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2-> judul = "Uncharted";
// $produk2->tambahproperty = "Teti";
// var_dump($produk2);

$produk1 = new Produk("Soekarno", "Bj Habibie", "susi", 30000);

$produk2 = new Produk("Jhon Leon", "Dhea", "Widjaya", 20000);

$produk3 = new Produk("Gian");



echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

?>