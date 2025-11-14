<?php

$nilai = 85; // Nilai awal

// Bagian 1: Menentukan Grade
if ($nilai >= 90 && $nilai <= 100) {
    $grade = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $grade = "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $grade = "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $grade = "D";
} elseif ($nilai >= 0 && $nilai <= 59) {
    $grade = "E";
} else {
    $grade = "Nilai tidak valid";
}

echo "Nilai Anda adalah $nilai, Grade Anda adalah $grade.<br>";

// Bagian 2: Menentukan Keterangan Kelulusan dengan switch
switch ($grade) {
    case "A":
    case "B":
        $keterangan = "Sangat Memuaskan, Anda Lulus!";
        break;

    case "C":
        $keterangan = "Cukup Memuaskan, Anda Lulus dengan Syarat.";
        break;

    case "D":
    case "E":
        $keterangan = "Mohon Maaf, Anda Tidak Lulus.";
        break;

    default:
        $keterangan = "Grade Tidak Dikenali.";
}

echo "Keterangan Kelulusan: $keterangan";

?>