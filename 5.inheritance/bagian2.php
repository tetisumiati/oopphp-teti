<?php 

class Produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain;
	       


 public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0, $jmlhHalaman = 0, $waktuMain = 0){
	       	$this->judul = $judul;
	       	$this->penulis = $penulis;
	       	$this->penerbit = $penerbit;
	       	$this->harga = $harga;
	       	$this->jmlhHalaman = $jmlhHalaman;
	       	$this->waktuMain = $waktuMain;
	  
	   }


	 public function getLabel(){
	    return "$this->penulis, $this->penerbit";	
	 }

	 public function getInformation() {
	 	// Komiik : Soekarno | Bj habibie, susi (Rp. 30000) - 100 Halaman.
	 	$str = "{$this->tipe}  | {$this->getLabel()} (Rp. {$this->harga})";

	 	return $str;
     }


 }

 class Komik extends Produk { 
       public function getInfoProduk(){
       	$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman}.";
    
	 return $str;
 }
 }

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam,";
	
return $str;
  }
  }     





class CetakInfoProduk {
	public function cetak( Produk $produk){
	  $str = "{$produk->judul} | {$produk->getLabel()} (Rp. { $produk->harga})";
	  return $str;	
	}
} 



$produk1 = new Komik("Soekarno", "Bj habibie", "Susi", 30000, 100, 0);

$produk2 = new Game("Jhon Leon", "Dhea", "Widjaya", 25000, 0, 30);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>