<?php
    session_start();
    if($_SESSION["role"] == "admin")
        echo 'Dobro došli, ' . $_SESSION["username"] . '. Vaša razina je administrator.';
    else
        echo 'Dobro došli, ' . $_SESSION["username"] . '.';
    echo '<a href="prijava.php">BACK</a>';
?>