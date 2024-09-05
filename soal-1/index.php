<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="post">
                <p><b>Jari-jari: </b></p>
                    <input type="text" name="jari"> <br/>
                <p><b>Tinggi: </b></p>
                    <input type="text" name="tinggi"> <br/><br/>
                   
                <input type="submit" class="btn btn-primary" name="hitung" value="Hitung">
            </form>
    <?php
        // tambahkan perhitungan volume tabung di sini
        
                    if(isset($_POST['hitung'])) {
                        $jari = $_POST['jari'];
                        $tinggi = $_POST['tinggi'];
                        $phi = 22/7;
                        $volume = $phi * $jari * $jari * $tinggi;
                           
                        printf("Hasil perhitungan volume tabung adalah %.2f",$volume);
                    }
    ?>
</body>
</html>