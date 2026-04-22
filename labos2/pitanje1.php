<?php
    $velslova = isset($_POST["velslova"]) ? $_POST["velslova"] : "";
    $potvrda = isset($_POST["potvrda"]) ? $_POST["potvrda"] : false;
?>

<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>Labos2-Pitanje1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style>
        body {
            font-size: <?php if($potvrda) echo $velslova;?>px;
        }
    </style>
    </head>
    <body>
        <form action="" method="post">
            <label>Upišite željenu veličinu slova:<br></label>
            <input type="number" name="velslova" value="<?php echo $velslova; ?>">
            <hr>
            <label>Potvrdite želite li promjeniti veličinu slova:<br></label>
            <input type="checkbox" name="potvrda"> Želim promijeniti veličinu slova
            <hr>
            <input type="submit" value="PROMJENI">
        </form>
    </body>
</html>