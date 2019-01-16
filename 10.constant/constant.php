<?php 

// define('NAMA', 'Teti');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// cho UMUR;

// class Coba {
// const NAMA = "Teti";
//}

//echo Coba::NAMA;


// echo __FILE__;

// function coba() {
	// return __FUNCTION__;
// }

// echo coba();

class coba {
	public $kelas = __CLASS__;
	}

	$obj = new Coba;
	echo $obj->kelas;

?>