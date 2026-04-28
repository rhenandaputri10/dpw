<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Variabel dalam PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
        //variabel-variabel yang terdapat dalam php
        $txt="Selamat Datang!";
        $name="Rhenanda Nayla Putri";
        $x=5;
        $y=16.5;

        echo "<p>Variabel txt berisi: $txt dengan tipe data string</p> ";
        echo "<p>Variabel name berisi: $name dengan tipe data string</p>";
        echo "<p>Nilai dari variabel x adalah $x </p>";
        echo "<p>Nilai dari variabel y adalah $y </p>";

        //konstanta dalam php
        define("nama_konstanta","Rhenandan Nayla Putri");
        echo "<br>".nama_konstanta;
        ?>
    </body>
</html>

