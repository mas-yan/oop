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

	//constructor method adalah metode khusus yg dijalankan otomatis setiap membuat instance dari class
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
		return "$this->penulis,$this->penerbit";
	}
}

class Cetakinfoproduk{
	public function cetak( Produk $produk)
	{
		$str = "{$produk->judul} | {$produk->getlabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("naruto","masashi kisimoto","jump","30000");

$produk2 = new Produk("free fire","garena","garena","gratis");

echo $produk1->getlabel();
echo "<br>";
echo $produk2->getlabel();
echo "<br>";
$info = new Cetakinfoproduk();
echo $info->cetak($produk2);
echo "<br>";
echo $info->cetak($produk1);

// echo "komik : ".$produk1->getlabel();
// echo "<br>";
// echo "game : ".$produk2->getlabel();

// echo "<hr>";

// $infoproduk1 = new Cetakinfoproduk();
// echo $infoproduk1->cetak($produk1);
// echo "<br>";
// echo $infoproduk1->cetak($produk2);


