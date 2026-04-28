<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Array 2 Dimensi</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            //array 2 dimensi
            $array = array(
                "1B" => array("Rhenanda","Raya","Alfi","Anggun"),
                "1C" => array("Valen","Cinta","Iffah","Metha")
            ) ;

            //menggunakan print_r tidak efektif karena output yang muncul tidak sesuai
            //print_r($array);
            //print_r($array["1B"]);
            
            echo $array['1C'][2];//menampilkan kelas 1C dengan index
            echo "<br>";
            echo $array['1B'][0]; //menampilkan rhenanda
            echo "<br>";
            echo $array['1C'][1]; //menampilkan cinta
            echo "<br>";

            //data kelas juga bisa ditulis dengan
            $array_simpe = [
                "1B"=> ["Rhenanda","Raya","Alfi","Anggun"],
                "1C"=> ["Valen","Cinta","Iffah","Metha"]
            ];
        ?>
    </body>
</html>
