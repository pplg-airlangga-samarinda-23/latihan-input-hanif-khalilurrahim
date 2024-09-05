<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal 5</title>
</head>
<body>
    <h1>Soal 5</h1>
    <form method="post">
        <label for="number">Input bilangan (5-20):</label>
        <input type="number" id="number" name="number" min="5" max="20" required><br><br>
        <label for="type">Pilih tipe bilangan:</label>
        <select id="type" name="type" required>
            <option value="ganjil">Ganjil</option>
            <option value="genap">Genap</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $type = $_POST["type"];
    
            echo "Nama saya: [Your Name]<br><br>";
    
            for ($i = 1; $i <= $number; $i++) {
                if ($type == "ganjil" && $i % 2 != 0) {
                    echo "$i (Ganjil)<br>";
                } elseif ($type == "genap" && $i % 2 == 0) {
                    echo "$i (Genap)<br>";
                }
            }
        }
        ?>
</body>
</html>