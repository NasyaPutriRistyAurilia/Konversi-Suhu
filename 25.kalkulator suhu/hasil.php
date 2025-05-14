<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Suhu Online</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="get" action="">
        <h1>Kalkulator Suhu</h1>
    </form>

    <?php
    // Mengambil input dari URL
    $C = $_GET['C'] ?? null; // Menggunakan null coalescing operator untuk menghindari undefined index
    $operator = $_GET['operator'] ?? null;

    // Memeriksa apakah input suhu diisi
    if ($C !== null && $operator !== null) {
        // Menginisialisasi variabel hasil
        $hasil = null;

        // Melakukan konversi suhu berdasarkan operator
        if ($operator == 'R') {
            $hasil = 4 / 5 * $C; // Konversi Celsius ke Reamur
            echo "<h2>Hasil: $C °C = $hasil °R</h2>";
        } elseif ($operator == 'K') {
            $hasil = $C + 273.15; // Konversi Celsius ke Kelvin
            echo "<h2>Hasil: $C °C = $hasil K</h2>";
        } else {
            echo "<p style='color: red;'>Error: Operator tidak valid</p>";
        }
    }
    ?>
    <br>
    <a href="index.php">Kembali</a>
</body>