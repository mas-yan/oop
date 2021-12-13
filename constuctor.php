<?php


// jualan produk
// jualan game
// jualan komik

/**
* 
*/
class Produk  //class
{
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	// constructor method adalah metode khusus yg dijalankan otomatis setiap membuat instance dari class
	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga")
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	// method
	public function getlabel()
	{
		return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
	}
}

$produk1 = new Produk("naruto","masashi kisimoto","jump","30000");

$produk2 = new Produk("free fire","garena","garena","gratis");

$produk3 = new Produk("Dragon ball");

echo "komik : ".$produk1->getlabel();
echo "<br>";
echo "game : ".$produk2->getlabel();
echo "<br>";
echo $produk3->getlabel();