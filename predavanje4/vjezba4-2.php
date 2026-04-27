<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>Vjezba4-2 - dućan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
        </style>
    </head>
    <body>
        <h2>Dobrodošli u naš dućan</h2>
    </body>
</html>
<?php
    function ducan($stanje="zatvoren")
    {
        echo "Dućan je $stanje.";
    }
    $date = new DateTime();
    $dan = $date->format('D');
    $sati = $date->format('H');

    if($dan=="Sun")
        ducan();
    else if($dan=="Sat")
        {
            if($sati>=9 && $sati<=14)
                ducan("otvoren");
            else
                ducan();
        }
    else
        {
            if($sati>=8 && $sati<=20)
                ducan("otvoren");
            else
                ducan();
        }
?>