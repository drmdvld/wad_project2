<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 3</title>
</head>
<body>
    <?php
    if(isset($_POST['hitung'])) {
        // Mendapatkan nilai dari latihan2.php
        $angka = $_POST['angka'];
        $dropdownAngka = $_POST['dropdownAngka'];

        // Operasi perkalian
        $hitung = $angka * $dropdownAngka;

        // Display the result
        echo "<p>Jawabannya adalah $hitung</p>";
    }
    ?>
</body>
</html>