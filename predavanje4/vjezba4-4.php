<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>Vjezba4-4 - Prosti brojevi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
        </style>
    </head>
    <body>
        <p>Upišite broj:</p>
        <form action="" method="post">
            <input type="number" name="broj" min="0">
            <input type="submit" value="Provjeri je li broj prost">
        </form>
    </body>
</html>

<?php
    $number = isset($_POST["broj"]) ? $_POST["broj"] : 0;
    $provjera = false;
    function isPrime($broj) {
    if ($broj < 2) return false;

    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false;
        }
    }
    return true;
}
    if(isPrime($number))
        echo $number . " je prost broj.<br>";
    else
        echo $number . " nije prost broj.<br>";

    echo "Svi prosti brojevi do 100: <br>";
$counter = 2;
for ($n = 2; $n <= 100; $n++) {
    if (isPrime($n)) {
        if($counter == 97) echo $n . "."; else echo $n . ", ";
        
    }
    $counter++;
}
?>