<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Perulangan 2</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            $angka = array (12,13,15,16,67,189,346,876,54232,3256);

            foreach ($angka as $nilai) {
                if ($nilai % 2 == 0) {
                    echo "$nilai merupakan bilangan Genap <br>";
                } else {
                    echo "$nilai merupakan bilangan Ganjil <br>";
                }
            }
        ?>
    </body>
</html>

