<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 17 - paginacija</title>
  <meta name="description" content="vjezba17bonus">
</head>
<body>

<?php

$mysql = mysqli_connect("localhost", "root", "", "predavanje3-2") or die("Connection failed");

$results = 15;


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}


$offset = ($page - 1) * $results;


$count_query = "SELECT COUNT(*) AS total FROM users";
$count = mysqli_query($mysql, $count_query);

$count_row = mysqli_fetch_assoc($count);

$total_users = $count_row['total'];


$total_pages = ceil($total_users / $results);


$query = "
    SELECT *
    FROM users
    LEFT JOIN countries
    ON countries.countrycode = users.countrycode
    LIMIT $results
    OFFSET $offset
";

$result = mysqli_query($mysql, $query);


while($row = mysqli_fetch_assoc($result)) {

    echo "<p>";

    echo htmlspecialchars($row['firstname']) . " ";
    echo htmlspecialchars($row['lastname']);

    if (!empty($row['countryname'])) {
        echo " (" . htmlspecialchars($row['countryname']) . ")";
    }

    echo "</p>";
}


echo "<hr>";

for($i = 1; $i <= $total_pages; $i++) {

    echo "<a href='?page=$i'>$i</a> ";
}

?>

</body>
</html>