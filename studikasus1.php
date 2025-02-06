<?php 

$gaji = 8000000; // Gaji bulanan dalam satuan rupiah
$pajak = 0;

// Menentukan persentase pajak berdasarkan gaji
if ($gaji >= 15000000) {
    $pajak = 20;
} elseif ($gaji >= 10000000 && $gaji < 15000000) {
    $pajak = 15;
} elseif ($gaji >= 5000000 && $gaji < 10000000) {
    $pajak = 10;
} elseif ($gaji >= 2000000 && $gaji < 5000000) {
    $pajak = 5;
} else {
    $pajak = 0;
}


$pajak_tetap = $pajak + 5;

$potongan = $gaji * ($pajak_tetap / 100);
$bersih = $gaji - $potongan;


echo "===== Rincian Pajak =====<br>";
echo "Gaji Bulanan : Rp $gaji <br>";
echo "Status Pegawai : Tetap Pajak : $pajak_tetap% <br>";
echo "Potongan Pajak : Rp $potongan <br>";
echo "Gaji Bersih : Rp $bersih <br>";

?>
