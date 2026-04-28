<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Konversi Terbilang</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            $angka = 3; // misalkan

            switch ($angka) {
                case 1:
                    $huruf = "satu";
                    break;
                case 2:
                    $huruf = "dua";
                    break;
                case 3:
                    $huruf = "tiga";
                    break;
                case 4:
                    $huruf = "empat";
                    break;
                case 5:
                    $huruf = "lima";
                    break;
                case 6:
                    $huruf = "enam";
                    break;
                case 7:
                    $huruf = "tujuh";
                    break;
                case 8:
                    $huruf = "delapan";
                    break;
                case 9:
                    $huruf = "sembilan";
                    break;
                default:
                    $huruf = "Angka tidak valid";
                }

                echo "Angka: $angka <br>";
                echo "Huruf: $huruf";
        ?>
    </body>
</html>


