<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan 2</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <h1> Selamat Datang!</h1>
    <p>Ahmad Rafi Ilzan<br>1202213186<br>SI-45-01</p>

    <!-- Input angka -->
    <form action="latihan3.php" method="post">
        <label for="integer" class="form-label">Masukkan angka</label>
        <input type="number" class="form-control" name="angka">
        <br>

        <!-- Input dropdown with a name attribute -->
        <label for="dropdown">Pilih angka</label>
        <select class="form-select" aria-label="Default select example" name="dropdownAngka">
            <option selected>Pilih angka</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>

        <!-- Button -->
        <button type="submit" class="btn btn-primary btn-lg" name="hitung">Hitung</button>
    </form>
</body>
</html>
