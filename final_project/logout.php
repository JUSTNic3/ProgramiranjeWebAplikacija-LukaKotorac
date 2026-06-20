<?php

session_start();
session_destroy();

header("Location: index.php?menu=5");
exit;

?>