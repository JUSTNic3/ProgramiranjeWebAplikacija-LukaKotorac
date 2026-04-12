
<?php
    $disciplinaKey = isset($_GET["disciplina"]) ? $_GET["disciplina"] : "";
    $visina = isset($_GET["visina"]) ? $_GET["visina"] : "";

    if($disciplinaKey == "freestyle"){
      $duljina = $visina * 0.9;
      print "Potrebna duljina štapova iznosi: " . $duljina . "cm";
      }
    else if($disciplinaKey == "classic"){
      $duljina = $visina *0.85;
      print "Potrebna duljina štapova iznosi: " . $duljina . "cm";
      }
    else if($disciplinaKey == "nordic"){
      $duljina = $visina *0.68;
      print "Potrebna duljina štapova iznosi: " . $duljina . "cm";
      }
    else
      echo "Upišite svoju visinu u centimetrima i stil hodanja koji vas zanima.";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <title>Labos1-Pitanje2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
  <form action="pitanje2.php" method="get">
    <p>
      <label for="visina">Vaša visina(cm):</label>
      <input id="visina" type="number" name="visina">
    </p>
    <p>
      <fieldset>
        <legend>Odaberi disciplinu:</legend>
        <label><input type="radio" name="disciplina" value="freestyle"  <?php echo $disciplinaKey==="freestyle" ? "checked" : ""; ?>>Free-style</label>
        <label><input type="radio" name="disciplina" value="classic" <?php echo $disciplinaKey==="classic" ? "checked" : ""; ?>>Classical</label>
        <label><input type="radio" name="disciplina" value="nordic" <?php echo $disciplinaKey==="nordic" ? "checked" : ""; ?>>Nordic walk</label>
      </fieldset>
    </p>
    <input type="submit" value="Izračunaj">
  </form>
</body>
</html>

