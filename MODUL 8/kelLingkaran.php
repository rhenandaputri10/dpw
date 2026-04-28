<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Menghitung Keliling Lingkaran</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <p>Jari-jari lingkaran: 15</p>
        <p>Phi: 3,14</p>
        <?php
            $r = 15; //jari-jari
            $phi = 3.14; //nilai phi
            $keliling = 2 * $phi * $r; //menghitung keliling lingkaran
            echo "Keliling lingkaran adalah: " . $keliling . " cm";
        ?>  
    </body>
</html>
