<!DOCTYPE html>
<html>
    <head>
        <meta charset = ""UTF-8>
        <title>Soal 3</title>
        <link rel="icon" type="" href="" size="16x16">
        <meta name="viewport" content="widt=devide-width, initial-scale=1">
        <meta name="description" content="Belajar PHP">
        <meta name="keywords" content="253307037">
        <meta name="author" content="Rhenanda Nayla Putri">
    </head>
    <body>
        <?php
            // Data siswa 
            $siswa = [
                ["no" => 1, "poin" => 75, "nama" => "Adi"],
                ["no" => 2, "poin" => 80, "nama" => "Joni"],
                ["no" => 3, "poin" => 65, "nama" => "Jihan"],
                ["no" => 4, "poin" => 70, "nama" => "Aya"],
                ["no" => 5, "poin" => 85, "nama" => "Ita"],
                ["no" => 6, "poin" => 90, "nama" => "Budi"],
                ["no" => 7, "poin" => 95, "nama" => "Tini"],
                ["no" => 8, "poin" => 65, "nama" => "Sari"]
            ];

            // a) Menampilkan poin siswa dengan nomor urut 5
            echo "a) Poin siswa nomor urut 5: ";
            foreach ($siswa as $data) {
                if ($data["no"] == 5) {
                    echo $data["poin"];
                }
            }
            echo "<br>";

            // Menampilkan siswa 90 poin
            echo "b) Siswa dengan poin 90: ";
            $ada = false;
            foreach ($siswa as $data) {
                if ($data["poin"] == 90) {
                    echo $data["nama"] . " ";
                    $ada = true;
                }
            }
            if (!$ada) {
                echo "Tidak ada";
            }
            echo "<br>";

            // Menampilkan semua nama siswa yang memiliki poin 100
            echo "c) Siswa dengan poin 100: ";
            $ada = false;
            foreach ($siswa as $data) {
                if ($data["poin"] == 100) {
                    echo $data["nama"] . " ";
                    $ada = true;
                }
            }
            if (!$ada) {
                echo "Tidak ada";
            }
        ?>

    </body>
</html>

