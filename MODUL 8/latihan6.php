<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>While loop, do whlie, for, dan foreach</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            //while loop
            $x =15;
            while ($x < 10) {
                echo"Nomor: $x <br>";
                $x--;
            }

            //do while
            $x = 1;
            do {
                echo "Nomor: $x <br>";
                $x++;
            } while ($x <= 5);

            //for 
            for ($x = 0; $x < 10; $x++) {
                echo "Nomor: $x <br>";
            }

            //for dengan break
            for ($x = 0; $x < 10; $x++) {
                if ($x == 4) {
                break;
                }
                echo "Nomor : : $x <br>";
            }

            //foreach
            $colors = array ("red, "."green, "."blue, "."yellow, "."pink, ");
                foreach ($colors as $value) {
                    echo "$value <br>";
                }
        ?>
    </body>
</html>
