<?php
class Manusia
{
	public $kepala;
	public $wajah;
	public $mata;

	// dalam function ini kita memanggil variable public $kepala di dalam kelas Manusia
	public function kepala()
	{
		return $this->kepala = 'Kepala Manusia';
	}

	// dalam function ini kita memanggil variable public $wajah di dalam kelas Manusia
	public function senyum()
	{
		return $this->wajah = 'Wajah Tersenyum';
	}
}

$manusia = new Manusia();

echo '<pre>';
var_dump($manusia);
echo '</pre>';

echo '<br>';

echo $manusia->kepala() . '<br>';
echo $manusia->senyum();