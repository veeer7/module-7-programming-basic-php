<?php 

$total_belanja = 1200000; 
$diskon = 0;

if ($total_belanja >= 1500000) {
    $diskon = 20;
} elseif ($total_belanja >= 1000000 && $total_belanja < 1500000) {
    $diskon = 15;
} elseif ($total_belanja < 1000000) {
    $diskon = 10;
}

$potongan = $total_belanja * ($diskon / 100);
$total_bayar = $total_belanja - $potongan;

echo "===== Rincian Pembelian =====<br>";
echo "Jenis Member : Gold <br>";
echo "Total Belanja: Rp $total_belanja <br>";
echo "Diskon : $diskon% <br>";
echo "Potongan : Rp $potongan <br>";
echo "Total Bayar : Rp $total_bayar <br>";

?>
