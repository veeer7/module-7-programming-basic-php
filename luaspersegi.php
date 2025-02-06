<?php
// Nilai panjang dan lebar
$panjang = 5;
$lebar = 3;

// Menghitung luas
$luas = $panjang * $lebar;

// Menghitung keliling
$keliling = 2 * ($panjang + $lebar);

// Menampilkan output
echo "Nilai Panjang = $panjang<br>";
echo "Nilai Lebar = $lebar<br><br>";

echo "Luas = Panjang x Lebar<br>";
echo "     = $panjang x $lebar<br>";
echo "     = $luas cm<br><br>";

echo "Keliling = 2 x (Panjang + Lebar)<br>";
echo "         = 2 x ($panjang + $lebar)<br>";
echo "         = 2 x " . ($panjang + $lebar) . "<br>";
echo "         = $keliling cm<br>";
?>
