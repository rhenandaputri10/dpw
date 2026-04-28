<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Perulangan 1</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            //menggunakan for
            for ($x = 1; $x <= 10; $x++) {
                echo $x . "<br>";
            }

            //menggunakan while
            $x = 1;

            while ($x <= 10) {
                echo $x . "<br>";
                $x++;
            }

            //menggunakan do...while
            $x = 1;

            do {
                echo $x . "<br>";
                $x++;
            } while ($x <= 10);
        ?>
    </body>
</html>

