<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Konversi Nilai</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            $nilai = 87; // Misalkan

            if ($nilai >= 0 && $nilai <= 59) {
                $huruf = "C";
            } elseif ($nilai >= 60 && $nilai <= 69) {
                $huruf = "BC";
            } elseif ($nilai >= 70 && $nilai <= 79) {
                $huruf = "B";
            } elseif ($nilai >= 80 && $nilai <= 89) {
                $huruf = "AB";
            } elseif ($nilai >= 90 && $nilai <= 100) {
                $huruf = "A";
            } else {
                $huruf = "Nilai tidak valid";
            }
            echo "Nilai Angka: $nilai <br>";
            echo "Nilai Huruf: $huruf";
        ?>
    </body>
</html>


