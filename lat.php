<?php
//hitung gaji pegawai smk
//buat class itung
//method hitung absen,lembur,gaji
//buat objek guru
/**
* 
*/
class Hitung{
	
	public $hadir,
		   $ijin,
		   $alpa,
		   $sakit,
		   $jam,
		   $gajipokok,
		   $nilaitranport;
	public function hitungabsen($hadir,$ijin,$alpa,$sakit){
		$hitunghadir = $this->hadir = $hadir - $this->ijin = $ijin - $this->alpa = $alpa - $this->sakit = $sakit;
		return $hitunghadir;
	}

	public function hitunglembur($jam){
		$hitunglembur = $this->jam = $jam * 10000;
		return $hitunglembur;
	}

	public function hitunggaji($gajipokok,$nilaitranport){
		$hitunggaji = $this->gajipokok = $gajipokok + $this->hitunglembur() + ($hitungabsen * $this->nilaitranport = $nilaitranport);
		return $hitunggaji;
	}
}

$guru = new Hitung;

echo $guru->hitungabsen(20,1,0,3);
echo "<br>";
echo $guru->hitunglembur(7);
echo $guru->hitunggaji(2,5);