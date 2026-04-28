<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>SOAL 1</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <h4>SOAL 1</h4>
        <p>Setiap bulan, Gaji pokok yang diterima Obi sebesar Rp. 3.250.000,-, tunjangan
            jabatan sebesar Rp. 1.200.000,- dan pajaknya penghasilan sebesar 10%
            dihitung dari gaji kotor (gaji kotor = gaji pokok + tunjangan).</p>
            <p>Buatlah kode PHP untuk menghitung gaji bersih yang diterima Obi setiap bulannya.</p>
        <?php
            // data gaji
            $gajiPokok = 3250000;
            $tunjangan = 1200000;

            // menghitung gaji kotor
            $gajiKotor = $gajiPokok + $tunjangan;

            // menghitung pajak (10%)
            $pajak = 0.10 * $gajiKotor;

            // menghitung gaji bersih
            $gajiBersih = $gajiKotor - $pajak;

            // menampilkan hasil
            echo "<b>Gaji Pokok :</b> Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
            echo "<b>Tunjangan  :</b> Rp. " . number_format($tunjangan, 0, ',', '.') . "<br>";
            echo "<b>Gaji Kotor :</b> Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
            echo "<b>Pajak (10%):</b> Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
            echo "<b>Gaji Bersih:</b> Rp. ". number_format($gajiBersih, 0, ',', '.') . "<br>";

        ?>
    </body>
</html>

