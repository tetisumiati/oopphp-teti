<?php 

class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit ="penerbit",
	       $harga = 0;

  public function getLabel(){
   	return "$this->penulis, $this->penerbit";
   	  }



}

// $produk1 = new Produk();
// $produk1-> judul1 = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2-> judul = "Uncharted";
// $produk2->tambahproperty = "Teti";
// vardump($produk2);

$produk3 = new Produk();
$produk3->judul = "Soekarno";
$produk3->penulis = "Bj Habibie";
$produk3->penerbit = "susi";
$produk3->harga = 30000;


$produk4 = new produk();
$produk4->judul = "Jhon leon";
$produk4->penulis = "Dhea";
$produk4->penerbit = "Widjaya";
$produk4->harga = 20000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



?>