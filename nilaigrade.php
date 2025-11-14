<?php

$nilai = 85; // Nilai awal yang diberikan

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

echo "Nilai Anda adalah $nilai, Grade Anda adalah $grade.";

?>
