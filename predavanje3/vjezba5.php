<?php
    $random = rand(1,9);

    $broj = isset($_GET["broj"]) ? $_GET["broj"] : "";

    $gumb = "";
    $theme = "";
    if($broj == $random)
        {
            $gumb = "Pogodak! Probaj ponovno";
            $theme = "button_right";
        }
    else
        {
            $gumb = "Krivo, probaj ponovno!";
            $theme = "button_wrong";
        }
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 5 - Igra: Random</title>
  <meta name="description" content="vjezba 5">
  <style>
        .button_wrong{
            display: inline-block;
            background-color: #d9534f;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            font-weight: 500;
            text-align: center;
        }
        .button_right{
            display: inline-block;
            background-color: #55b342e7;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            font-weight: 500;
            text-align: center;
        }
  </style>
</head>
    <body>
        <p>Igra (pogodi broj)</p>
        <form action="" method="get">
            <p>
                <label><strong>Upiši jedan broj od 1 do 9</strong></label>
                <input type="number" id="broj" name="broj" required="required">
            </p>
            <div class="<?php echo ($theme); ?>"><?php echo ($gumb); ?></div>
            <p>Zamišljeni broj je <?php echo ($random); ?></p>
        </form>
    </body>
</html>
<!-- Naziv datoteke: vjezba5.php -->