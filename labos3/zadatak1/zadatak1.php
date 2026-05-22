<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Slanje podataka u bazu</title>
</head>
<body>

    <form method = "post">
        <label for="ime">Ime</label>
        <br />
        <input name="ime" type="text" required/>
        <br />
        <label for="prezime">Prezime</label>
        <br />
        <input name="prezime" type="text" required/>
        <br />
        <label for="jmbag">JMBAG</label>
        <br />
        <input name="jmbag" type="number" required/>
        <br />
        <label for="mail">E-mail</label>
        <br />
        <input name="mail" type="email" required/>
        <br />
        <input name="submit" type="submit" value="Pošalji" /> 
    </form>

</body>
</html>


<?php
    $ime=isset($_POST["ime"]) ? $_POST["ime"] : "";
    $prezime=isset($_POST["prezime"]) ? $_POST["prezime"] : "";
    $jmbag=isset($_POST["jmbag"]) ? $_POST["jmbag"] : "";
    $mail=isset($_POST["mail"]) ? $_POST["mail"] : "";

    $connection = mysqli_connect("localhost", "root", "", "labos3");

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO student
            (ime_studenta, prezime_studenta, JMBAG, e_mail)
            VALUES
            ('$ime', '$prezime', '$jmbag', '$mail')";

    if (mysqli_query($connection, $sql)) {
        echo "Podaci su spremljeni.";
    } else {
        echo "Greška: " . mysqli_error($connection);
    }
?>
