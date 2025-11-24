<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perkalian 3 - While Loop</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tabel Perkalian 3 (While Loop)</h2>

<table>
    <thead>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $angka = 1; // Memulai dari 1

        while ($angka <= 10) { // Loop sampai 10 baris
            $hasil = 3 * $angka;

            echo "<tr>";
            echo "<td>3 x $angka</td>";
            echo "<td>$hasil</td>";
            echo "</tr>";

            $angka++; // Increment agar tidak infinite loop
        }
        ?>
    </tbody>
</table>

</body>
</html>