<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba - tražilica</title>
  <meta name="description" content="trazilica">
</head>
<body>
	<?php 
    $MySQL = mysqli_connect("localhost","root","","predavanje3") or die('Error connecting to MySQL server.');
    

    print '<h2>Users - pretraga</h2>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print '<a href="vjezba_trazilica.php">BACK</a>';
    }
        print '
        <form method="POST">
                <label for="search">Traži:</label>
                <input type="text" name="search" required placeholder="pretraga">
                <input type="submit" value="Pretraži">
        </form>';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $query  = "SELECT firstname, lastname FROM users WHERE firstname='" . $_POST['search'] . "' OR lastname='" . $_POST['search'] . "'";
        $result = @mysqli_query($MySQL, $query);

        $rowcount = mysqli_num_rows($result);

        print '<p>Nađeno je ' . $rowcount . ' rezultata!</p>';
        
        while($row = @mysqli_fetch_array($result)) {
            print "<p>". $row['firstname'] . " <span style='color:red'>" . $row['lastname'] . "</span></p>";
        }

        
    }
?>
</body>
</html>