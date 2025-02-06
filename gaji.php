<?php 

$gaji = 120000;
$pajak = 0;

$bulanan = $gaji - ($pajak / 100);

if ($gaji >= 150000){
    $pajak = 20;
} elseif ($gaji >= 1000000 && $gaji < 150000){
    $pajak = 15;
} elseif ($gaji >= 5000000 && $gaji < 1000000){
    $pajak = 10;
} elseif ($gaji >= 200000 && $gaji < 500000){
    $pajak = 5;
} else {
    $pajak = 0;
}

$persen = $pajak/100;
$potongan = $gaji*$persen;
$bersih = $gaji-$potongan;

// echo "Gaji bulanan Anda adalah Rp. $bulanan";
// echo "Pajak yang harus dibayarkan adalah Rp. $pajak";
// echo "Jumlah gaji setelah pajak adalah Rp. $bulanan";

echo "===========Rincian pajak==========<br>";
echo "bulanan : $gaji" . "<br>";
echo "pajak : $pajak" . "%" . "<br>";
echo "potongan : $potongan" . "<br>";
echo "bersih : $bersih" . "<br>";