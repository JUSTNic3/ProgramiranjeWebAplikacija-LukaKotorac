
<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 4-1</title>
  <meta name="description" content="vjezba 5">
  <style>
        ul{
            list-style: none;
        }
        #submit{
            background-color: #42b5bb;
            font-size: 20px;
            color:white;
            border-radius: 5px;
        }
  </style>
</head>
<body>
    <form action="" method="post">
        <?php
            echo "<p>Označi vozilo:</p><ul>";
            $cars=array("Audi","BMW","Renault","Citroen");
            foreach($cars as $car)
                {
                    echo "<li><input type='radio' name='vozilo' value='$car'>$car</li>";
                }
            echo "</ul>";
        ?>
        <input id="submit" type="submit" value="Pošalji">
    </form>
</body>
</html>

<?php
    $auto = isset($_POST["vozilo"]) ? $_POST["vozilo"] : "";
    echo $auto;
?>