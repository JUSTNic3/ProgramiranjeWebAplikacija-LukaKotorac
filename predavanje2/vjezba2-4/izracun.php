<?php
if (isset($_POST['a']) && isset($_POST['b'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];

    $c = (3 * $a - $b) / 2;

    echo "<h3>Rezultat:</h3>";
    echo "a = $a <br>";
    echo "b = $b <br>";
    echo "c = (3 * $a - $b) / 2 = $c";

} else {
    echo "Nema podataka!";
}
?>