<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Switch PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            $warna = "merah";
            switch ($warna) {
                case "merah":
                    echo"warna merupakan merah";
                break;
                case "kuning":
                    echo "warna adalah kuning";
                break;
                case "hijau":
                    echo "warna adalah hijau";
                break;
            default:
                echo "Warna tidak ditemukan!";
            }
            echo"<br>";
        ?>
    </body>
</html>

