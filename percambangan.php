<?php 
$total_belanja = 100;


//jika belanja lebih dari 100, maka selamat anda mendapatkan diskon 500
//selainnya nda : tidak mendapatkan diskon

echo "total belanja anda $total_belanja <br>";

if ($total_belanja >= 1000) {
    echo "Selamat anda mendapat diskon Rp. 500 ";
} else {
    echo "Anda tidak mendapat diskon";
}

$hari = "sabtu";
if ($hari == "senin") {
    echo "Mengenakan Seragam Putih Abu";
} else if ($hari == "selasa") {
    echo "Mengenakan Seragam Pramuka";
} else if ($hari == "rabu") {
    echo "Mengenakan Seragam Produktif";
} else if ($hari == "kamis") {
    echo "Mengenakan Seragam batik";
} else if ($hari == "jumat") {
    echo "Mengenakan Seragam Gamis";
} else {
    echo "hari libur";
}
?>
