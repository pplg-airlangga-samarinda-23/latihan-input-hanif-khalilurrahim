<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 4</title>
</head>
<body>
    <h1>Soal 4</h1>
    <form method="post">
Masukkan Tanggal Lahir : <input type="date" name="tanggal_lahir"><br>
<input type="submit" value="Hitung Umur"/>
</form>
    <?php
        $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
        $thn = "0";
        $bln = "0";
        $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "Umur anda adalah :<br>";
        echo $thn." tahun ".$bln." bulan ".$tgl." hari";
    ?>
</body>
</html>