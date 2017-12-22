<?php

// di dalam function tambah kita akan belajar menambahkan angka
function tambah()
{
	$number1 = 1;
	$number2 = 2;

	return $number1 + $number2;
}

// inisialisasi dari function tambah
$tambah = tambah();

// output tambah
echo 'number1 + number2 = ' . $tambah . '<br>';

// di dalam function kurang kita akan belajar menambahkan angka
function kurang()
{
	$number3 = 1;
	$number4 = 2;

	return $number3 - $number4;
}

// inisialisasi dari function kurang
$kurang = kurang();

// output kurang
echo 'number3 - number4 = ' . $kurang . '<br>';

// di dalam function kali kita akan belajar menambahkan angka
function kali()
{
	$number5 = 3;
	$number6 = 2;

	return $number5 * $number6;
}

// inisialisasi dari function kali
$kali = kali();

// output kali
echo 'number5 * number6 = ' . $kali . '<br>';

// di dalam function bagi kita akan belajar menambahkan angka
function bagi()
{
	$number7 = 3;
	$number8 = 2;

	return $number7 / $number8;
}

// inisialisasi dari function bagi
$bagi = bagi();

// output bagi
echo 'number7 / number8 = ' . $bagi . '<br>';

// di dalam function modulus kita akan belajar menambahkan angka
function modulus()
{
	$number9 = 10;
	$number10 = 3;

	return $number9 % $number10;
}

// inisialisasi dari function modulus
$modulus = modulus();

// output modulus
echo 'number9 / number10 = ' . $modulus . '<br>';