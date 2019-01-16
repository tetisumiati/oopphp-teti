<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $diskon = 0;

	


 public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0 ){
 	 $this->judul = $judul;
 	 $this->penulis = $penulis;
 	 $this->penerbit = $penerbit;
 	 $this->harga = $harga;

 }

public function setJudul ($judul) {
	$this->judul = $judul;
}
	public function getJudul(){
		return $this->judul;
}
 public function setPenulis($penulis){
 	$this->penulis = $penulis;
 }

 public function getPenulis(){
 	return $this->penulis;
 }

public function setPenerbit($penerbit){
 	$this->penerbit = $penerbit;
 }
 public function getPenerbit(){
 	return $this->penerbit;
 }

public function setDiskon($diskon){
 	$this->Diskon = $diskon;
 }
 public function getdiskon(){
 	return $this->diskon;
 }

public function setHarga($harga){
 	$this->harga = $harga;
 }
 public function getHarga(){
 	return $this->harga;
 }

public function getLabel(){
	return "$this->penulis, $this->penerbit";
}

public function getInfoProduk() {
	// Komik : Soekarno | Bj habibie, susi (Rp. 30000) - 100 Halaman.
$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

return $str;
}


}
class Komik extends Produk {
	public $jmlhHalaman;

public function __construct($judul = "judul",$penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhHalaman = 0){

	parent::__construct($judul, $penulis, $penerbit, $harga);

	$this->jmlHalaman = $jmlhHalaman;


}



public function getInfoProduk(){
	$str = "Komik : " .parent::getInfoProduk(). "- {$this->jmlhHalaman} Halaman.";

	return $str;
}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;

	}
  
 

public function getInfoProduk(){
	$str = "Game : " .parent::getInfoProduk(). " - {$this->waktuMain} Jam,";

	return $str;
	}
	}  
    




class CetakInfoProduk {
	public function cetak( Produk $produk){
	  $str = "{$produk->judul} | {$produk->getLabel()} (Rp. { $produk->harga})";
	  return $str;
	}
}



$produk1 = new Komik("Soekarno", "Bj habibie", "Susi", 30000, 100, 0, "Komik");

$produk2 = new Game("Jhon Leon", "Dhea", "Widjaya", 25000, 0, 30, "Game");

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setPenulis("Teti");
echo $produk2->getPenulis();

?>