<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 17</title>
  <meta name="description" content="vjezba17">
</head>
<body>
<?php
    $mysql = mysqli_connect("localhost","root","","predavanje3-2") or die('Error connecting to MySQL server.');
    $query = "SELECT * 
          FROM users
          LEFT JOIN countries 
          ON countries.countrycode = users.countrycode";
    $result = @mysqli_query($mysql, $query);
    while($row = @mysqli_fetch_array($result)) {
        print "<p>". $row['firstname'] . " " . $row['lastname'] . " " . ($row['countryname'] != '' ? "(" . $row['countryname'] . ")" : "" ) . "</p>";
    }
?>
</body>
</html>