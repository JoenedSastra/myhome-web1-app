<?php
$Pemasukan = 50000000;
$Hutang_a = 15500000;
$Bunga_Hutang_a = 0.05;
$Hutang_b = 9500000;
$Bunga_Hutang_b = 0.045;

$sisa = $pemasukan-($Hutang_a+($Hutang_a*$Bunga_Hutang_a));
echo "Sisa uang adalah: $sisa";
echo "<br />";
$bunga_hutang= ($Hutang_a*$Bunga_Hutang_a)+($Hutang_b*$Bunga_Hutang_b);
echo "jumlah total bunga hutang adalah: $bunga_hutang";
echo "<br />";
$jumlah_hutang= $Hutang_a+($Hutang_a*$Bunga_Hutang_a)+$Hutang_b+($Hutang_b);
echo "jumlah total hutang adalah: $jumlah_hutang";
?>