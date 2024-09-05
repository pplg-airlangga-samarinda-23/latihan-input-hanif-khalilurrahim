<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 1</title>
</head>
<body>
    <h1>Soal 1</h1>
    <form method="POST">
            <div class="jarak">
                <label>jarak</label>
                <input type="number" name="jarak">
            </div>
            <div class="hitung_konversi">
                <label>konversi dari </label> 
                <select name="km">
                    <option value="Km_m"> km = m </option>
                    <option value="Km_cm"> km = cm</option>
                    <option value="Km_mm"> km = mm</option>
                </select>
            </div>
            <div>
                <button>hitung jarak</button>
            </div>
    </form>
    <?php
        // lakukan perhitungan konversi jarak di sini
        $jarak = @$_POST['jarak'];
                $km = @$_POST['km'];
                // $jarak = $km;
                $meter = 1000;
                $centimeter = 100000;
                $milimeter = 1000000;


                if ($km == "Km_m"){
                    $hasil = $jarak * $meter;
                    echo "hasil dari konversi $jarak km > $hasil m <br>";
                }
                if ($km == "Km_cm"){
                    $hasil = $jarak * $centimeter;
                    echo "hasil dari konversi $jarak km > $hasil cm <br>";
                }
                if ($km == "Km_mm"){
                    $hasil = $jarak * $milimeter;
                    echo "hasil dari konversi $jarak km > $hasil mm <br>";
                }
    ?>
</body>
</html>