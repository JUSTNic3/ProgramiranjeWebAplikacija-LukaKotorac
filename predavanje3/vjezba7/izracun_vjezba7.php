<?php
    $prvi = isset($_POST["prvi"]) ? $_POST["prvi"] : "";
    $drugi = isset($_POST["drugi"]) ? $_POST["drugi"] : "";
    $prolaz = false;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vjezba 7 - izračun ocjene</title>
        <meta name="description" content="vjezba 6">
        <style>
            body{ 
                font-family: 'Open Sans Condensed'; 
                font-size: 110%; 
                color: #232323; 
                width: 50%; 
                margin: 0 auto; 
                margin-top: 2em; 
            }
            .blok { margin: 4px 0; }
        </style>
    </head>
    <body>
        <h1>Izračun završne ocjene</h1>
        <p>Potrebno je napraviti formu za izračun ocjene iz kolokvija. Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5</p>
        <div class="blok">
            <?php
                if ($prvi == 1)
                    echo "Ocjena iz prvoga kolokvija je negativna. Student mora ponavljati prvi kolokvij.";
                else if ($drugi == 1)
                    echo "Ocjena iz drugoga kolokvija je negativna. Student mora ponavljati drugi kolokvij.";
                else{
                    $prolaz = true;
                    $prosjek = ($prvi+$drugi)/2;
                    $konacna = round($prosjek);
                    echo "Ocjena iz prvoga kolokvija je: " . $prvi;
                    echo "<br>";
                    echo "Ocjena iz drugoga kolokvija je: " .$drugi;
                }
            ?>
        </div>
        <hr align="left" width="20%">
        <div class="blok">
            <?php
                if($prolaz){
                    echo "Srednja ocjena iznosi: ".$prosjek;
                    echo "<br>";
                    echo "Konačna ocjena iznosi: ".$konacna;
                }
            ?>
        </div>
        <a href="vjezba7.php">Povratak</a>
    </body>
</html>
<!-- Naziv datoteke: izracun_vjezba7.php -->