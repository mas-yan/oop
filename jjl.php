<?php

class Produk{
	public $tipe,
		   $nama,
		   $pembuat,
		   $penerbit,
		   $harga,
		   $halaman,
		   $jam;
	public function __construct($tipe,$nama,$pembuat,$penerbit,$harga,$halaman,$jam){
		$this->tipe = $tipe;
		$this->nama = $nama;
		$this->pembuat = $pembuat;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->halaman = $halaman;
		$this->jam = $jam;
	}

	public function info(){
		$str = "{$this->tipe} : {$this->nama} | {$this->pembuat}, {$this->penerbit}, (Rp.{$this->harga})";

		if ($this->tipe == "komik") {
			$str .= " - {$this->halaman} halaman";
		}else if($this->tipe = "game"){
			$str .= " ~ {$this->jam} jam";
		}
		return $str;
	}
}

$produk1 = new Produk("komik","naruto","Masashi Kisimoto","Shonen Jump","30000",10,0);
$produk2 = new Produk("game","Free Fire","Garena","Tencent","free",0,50);

echo $produk1->info();
echo "<br>";
echo $produk2->info();
// komik : naruto | Masashi Kisimoto, Shonen Jump (Rp.30000) - 10 Halaman.
// game  : Free Fire | Garena, Tencent (Free) ~ 50 jam.