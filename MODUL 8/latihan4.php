<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Comparison Operator PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
        //Comparison Operators
        //1. ==     Sama Dengan                 $x == $y
        //2. ===    Sama Persis                 $x === $y
        //3. !=     Tidak Sama Dengan           $x != $y
        //4. <>     Tidak Sama Dengan           $x <> $y
        //5. !==    Tidak Sama Persis           $x !== $y
        //6. >      Lebih Besar dari            $x > $y
        //7. <      Lebih Kecil dari            $x < $y
        //8. >=     Lebih besar sama dengan     $x >= $y
        //9. <=     Lebih kecil sama dengan     $x <= $y
        //10. <=>   Spaceship                   $x <=> $y	

        $t = date(format:"H");
        echo "If";
    
        if ($t<16){
            echo "Selamat Siang!";
        }

        $t = date(format:"h");
        echo "<br> If dan Else <br>";

        if ($t<20){
            echo "Selamat Siang!";
        } else {
            echo "Selamat Malam!";
        }

        echo "<br> Nested If <br>";

        if($t<10){
            echo "Selamat Pagi!";
        } else if ($t<16){
            echo "Selamat Sore!";
        } else if ($t>20){
            echo "Selamat Malam";
        }
        ?>
    </body>
</html>

