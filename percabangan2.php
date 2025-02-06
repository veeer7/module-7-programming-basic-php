<?php 

$uts = 75;
$uas = 85;
$tugas = 70;


$status = ""; // lulus atau perbaikan
$grade = "";  // A, B, C, atau lainnya

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "perbaikan";
    $grade = "C";
} elseif ($rata >= 80 && $rata <= 89) {
    $status = "lulus";
    $grade = "B";
} elseif ($rata >= 90 && $rata <= 100) {
    $status = "lulus";
    $grade = "A";
} else {
    $status = "tidak lulus";
    $grade = "D";
}

// Menampilkan hasil
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Tugas: $tugas <br>";
echo "Rata-rata: $rata <br>";
echo "Grade: $grade <br>";
echo "Status: $status <br>";

?>