<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 6 - kalkulator</title>
  <meta name="description" content="vjezba 6">
  <style>

  </style>
</head>
    <body>
        <p>Kalkulator</p>
        <form action="" method="get">
            <p>
                <label><strong>Upišite prvi broj: </strong></label>
                <input type="number" id="pbroj" name="pbroj" required="required">
            </p>
            <p>
                <label><strong>Upišite drugi broj: </strong></label>
                <input type="number" id="dbroj" name="dbroj" required="required">
            </p>
            <div class = "gumbi">
                <input type="submit" name="operator" value="+"></button>
                <input type="submit" name="operator" value="-"></button>
                <input type="submit" name="operator" value="*"></button>
                <input type="submit" name="operator" value="/"></button>
            </div>
        </form>
    </body>
</html>

<?php
    $prvibroj = isset($_GET["pbroj"]) ? $_GET["pbroj"] : "";
    $drugibroj = isset($_GET["dbroj"]) ? $_GET["dbroj"] : "";
    $operator = isset($_GET["operator"]) ? $_GET["operator"] : "";
    switch($operator){
        case "+":
            $rezultat = $prvibroj + $drugibroj;
            print $rezultat;
            break;
        case "-":
            $rezultat = $prvibroj - $drugibroj;
            print $rezultat;
            break;
        case "*":
            $rezultat = $prvibroj * $drugibroj;
            print $rezultat;
            break;
        case "/":
            $rezultat = $prvibroj / $drugibroj;
            print $rezultat;
            break;
        default:
            echo "Upišite brojeve za izračun i pritisnite jedan gumb.";
    }
?>
<!-- Naziv datoteke: vjezba6.php -->