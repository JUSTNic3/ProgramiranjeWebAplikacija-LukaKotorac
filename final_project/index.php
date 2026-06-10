<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>Aninews</title>
  <meta name="description" content="Stranica sa novostima u vezi anime svijeta">
  <h1 id="hero-title">ANINEWS</h1><br>
  <hr>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sansation&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    print '
        <nav>';
			include("menu.php");
		print '</nav>';
    ?>
</body>
<footer>
    <?php print '<p>Copyright &copy; ' . date('Y') . ' Luka Kotorac</p> '?>
</footer>
</html>