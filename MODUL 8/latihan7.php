<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Array dalam PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
       <?php
            $buah = array("mangga ", "strawberry ", "anggur ", "jeruk ", "alpukat " );
            echo "Saya suka buah ". $buah[0] ."dan buah ". $buah[4];
            echo "<br>";

            echo "Saya suka buah". $buah[1]; //Hanya menampilkan strawberry
            echo "<br>";
            echo "Saya suka". $buah[4]; //Hanya menampilkan alpukat
            echo "<br>";
            echo "Saya tidak menyukai buah". $buah[3];//Hanya menampilkan jeruk
            echo "<br>";

            //
            $umur = array("Andi"=>"35 Tahun","Ben"=>"37 Tahun","Joe"=>"12 Tahun") ;
            $umur['Nayy'] = "20 Tahun";
            echo "Andi berumur " .$umur['Andi'];
        ?> 
    </body>
</html>


 