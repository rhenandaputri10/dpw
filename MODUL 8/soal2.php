<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Soal 2</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <h4>SOAL 2</h4>
        <p>Ani akan mengambil uang tabungan sejumlah Rp. 1.387.500,- di sebuah Bank.
            Misalkan pada saat itu uang pecahan yang berlaku adalah Rp. 100.000,-;
            Rp.50.000,-; Rp. 20.000,-; Rp. 10.000,-; Rp. 5.000,-; Rp. 2.000,- dan Rp. 500,-.</p>
           <p>Buatlah kode PHP untuk menentukan banyaknya masing-masing uang pecahan yang diperoleh Ani dari Bank.</p>
        <?php
            $jumlah = 1387500;

            $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];
            foreach ($pecahan as $nilai) {
                $lembar = intdiv($jumlah, $nilai); // hitung jumlah lembar
                $jumlah = $jumlah % $nilai; // sisa uang

                echo "Rp " . number_format($nilai, 0, ',', '.') . " = $lembar lembar <br>";
            }
        ?>
    </body>
</html>
