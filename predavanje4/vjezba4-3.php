<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>Vjezba4-3 - str_word_count</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
        </style>
    </head>
    <body>
        <h2>Zadatak <strong>str_word_count</strong></h2>
        <p>U zadataku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu str_word_count</p>
        <p><strong>Ulazni niz:</strong></p>
        <form action="" method="post">
            <input type="text" name="ulaz">
            <br>
            <input type="submit" value="Ispiši broj riječi">
        </form>
    </body>
</html>

<?php
    $ulaz = isset($_POST["ulaz"]) ? $_POST["ulaz"] : "";
    echo "Ulazni niz:" . $ulaz . "<br>";
    echo "Broj riječi je: " . str_word_count($ulaz);

?>