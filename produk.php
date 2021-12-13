<?php


// jualan produk
// jualan game
// jualan komik

/**
* 
*/
class Produk
{
	// properti
	public $judul = "judul", 
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = "harga";

	// method
	public function getlabel()
	{
		return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2-> judul = "uncharted"; 
// $produk2-> ppp = "lur";
// var_dump($produk2);

$produk3 = new produk();//objek
$produk3 -> judul = "naruto";
$produk3-> penulis = "masashi kisimoto";
$produk3 -> penerbit = "jump";
$produk3 -> harga = "30000";

echo "komik : $produk3->judul, penulis : $produk3->penulis, penerbit :$produk3->penerbit, harga : $produk3->harga";
echo "<br>";

echo $produk3->getlabel();
echo "<hr>";

$produk4 = new produk();
$produk4-> judul = "free fire";
$produk4-> penulis = "garena";
$produk4-> penerbit =  "garena";
$produk4-> harga = "gratis";

echo "komik : ".$produk3->getlabel();
echo "<br>";
echo "game : ".$produk4->getlabel();