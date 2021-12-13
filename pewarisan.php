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
		   $harga,
		   $jmlhalaman,
		   $waktu,
		   $tipe;

	//constructor method adalah metode khusus yg dijalankan otomatis setiap membuat instance dari class
	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga",$jmlhalaman = 0,$waktu = 0,$tipe)
	{
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlhalaman = $jmlhalaman;
		$this->waktu = $waktu;
		$this->tipe = $tipe;
	}

	public function infolgkp(){
		$str = "{$this->tipe} : {$this->judul} | {$this->penulis}, {$this->penerbit} (Rp.{$this->harga})";

		if ($this->tipe == "komik") {
			$str .= " - {$this->jmlhalaman} halaman";
		}else if($this->tipe == "game"){
			$str .= " ~ {$this->waktu} jam";
		}

		return $str;
	}

	// komik : naruto | Masashi Kisimoto, Shonen Jump (Rp.30000) - 10 Halaman.
	// game  : Free Fire | Garena, Tencent (Free) ~ 50 jam.

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

$produk1 = new Produk("naruto","masashi kisimoto","jump","30000","10",0,"komik");

$produk2 = new Produk("free fire","garena","garena","gratis",0,50,"game");


echo $produk1->infolgkp();
echo "<br>";
echo $produk2->infolgkp();

// komik : naruto | Masashi Kisimoto, Shonen Jump (Rp.30000) - 10 Halaman.
// game  : Free Fire | Garena, Tencent (Free) ~ 50 jam.