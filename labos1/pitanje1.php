<?php
    $ime = "Luka";
    $prezime = "Kotorac";
    $godine = "26";

    if($godine > 25)
        $osoba = $ime . " " . $prezime . ", Godine: " . $godine . " - osoba je rođena u 20. stoljeću";
    else
        $osoba = $ime . " " . $prezime . ", Godine: " . $godine;
    print $osoba;
?>