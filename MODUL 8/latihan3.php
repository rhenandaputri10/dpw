<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Operator dalam PHP</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            $x= 25;
            $y= 5;

            // Arithmetic operators: digunakan dengan nilai numerik untuk melakukan operasi matematika umum
            echo "Hasil Penambahan dari variabel <b> x + y </b> yaitu: ".$x + $y."<br>"; //Penjumlahan
            echo "Hasil Pengurangan dari variabel <b> x - y </b> yaitu: ".$x - $y."<br>"; //Pengurangan
            echo "Hasil Perkalian dari variabel <b> x * y </b> yaitu: ".$x * $y."<br>"; // Perkalian
            echo "Hasil Pembagian dari variabel <b> x / y </b> yaitu: ".$x / $y."<br>"; //Pembagian
            echo "Hasil Operasi Modulus dari variabel <b> x % y </b> yaitu: ".$x % $y."<br>"; //Sisa bagi
            echo "Hasil Operasi Eksponensial dari variabel <b> x ** y </b> yaitu:".$x ** $y."<br>"; // Pemangkatkan
            echo "<br>";
            echo "<br>";

            // Assignment operators: 
            $x += 10 ; // Nilai ini sama dengan $x = $x + 10
            $y *= 10 ; // Nilai ini sama dengan $y = $y * 5
            echo "Hasil Penambahan dari variabel x yaitu: ".$x."<br>";
            echo "Hasil Perkaliandari variabel x yaitu: ".$y."<br>";
            echo "<br>";

            // Increment/Decrement operators
            echo "<b>++x</b> berisi: ".++$x. "<br>"; // Menghitung $x sebanyak satu, lalu mengembalikan $x.
            echo "<b>x++</b> berisi: ".$x++. "<br>"; // Mengembalikan $x, lalu menambah $x sebanyak satu.
            echo "<b>x</b>   berisi: ".$x. "<br>"; // Hasil akhir $x setelah dihitung menggunakan increments operators
            echo "<br>";
            echo "<b>--y</b> berisi: ".--$y. "<br>"; // Mengurangi $y sebanyak satu, lalu mengembalikan $y
            echo "<b>y--</b> berisi: ".$y--. "<br>"; // Mengembalikan $y, lalu mengurangi $y sebanyak satu.
            echo "<b>y</b>   berisi: ".$y. "<br>"; // Hasil $y setelah dihitung menggunakan Decrements Operators
            echo "<br>";

            // Conditional assignment operators
            $user = "Rhenanda Nayla Putri"; 
            $status = (empty($user)) ? "Benar" : "Salah"; 
            echo $status."<br>";
            echo $color = $color ?? "red";

            echo "<h4>Perbedaan x++ dan ++x</h4>";
            echo "<p><b>x++</b> berfungsi untuk Mengembalikan x, lalu menambah x sebanyak satu.</p>";
            echo "<p>Sedangkan <b>++x</b> berfungsi untuk Menghitung x sebanyak satu, lalu mengembalikan x.</p>";
        ?>
    </body>
</html>


