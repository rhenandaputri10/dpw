<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Function PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            //function
            function writeMsg($nama) {
                echo "Halo ".$nama."<br>" ;
            }
            writeMsg(nama:"Rhenanda"); //memanggil fungsi

            //function dengan mengirim nilai balik
            function tambah(int $angka1, int $angka2) {
                $a = $angka1 + $angka2;
                return $a;
            }
            $hasil = tambah (angka1: 9283, angka2:3289);
            echo "Hasil penjumlahan dari 9283 + 3289 adalah ". $hasil ."<br>";
        ?>
    </body>
</html>

