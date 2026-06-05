<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labos 4 - zadatak 3</title>
</head>
<body>

<h2>Unos predmeta</h2>

<form method="post">

    Šifra predmeta:<br>
    <input type="number" name="sifra" required>
    <br><br>

    Naziv predmeta:<br>
    <input type="text" name="naziv" required>
    <br><br>

    ECTS bodovi:<br>
    <input type="number" name="ects" required>
    <br><br>

    <input type="submit" value="Spremi">

</form>

</body>
</html>

<?php

$conn = new mysqli("localhost", "root", "", "labos4");

if ($conn->connect_error) {
    die("Greška pri spajanju na bazu.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sifra = $_POST["sifra"];
    $naziv = $_POST["naziv"];
    $ects = $_POST["ects"];

    $sql = "INSERT INTO predmeti (sifra, naziv, ects)
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("isi", $sifra, $naziv, $ects);

    if ($stmt->execute()) {
        echo "Predmet je uspješno upisan.";
    } else {
        echo "Greška pri unosu.";
    }

    $stmt->close();
}

$conn->close();

?>