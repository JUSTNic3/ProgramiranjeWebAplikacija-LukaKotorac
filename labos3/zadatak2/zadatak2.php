<?php
$conn = new mysqli("localhost", "root", "", "labos3");

if ($conn->connect_error) {
    die("Greška pri spajanju: " . $conn->connect_error);
}

$sql = "SELECT * FROM korisnik";
$result = $conn->query($sql);

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>ID</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Spol</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Godine</th>
        <th>Hobi</th>
      </tr>";

while ($row = $result->fetch_assoc()) {

    $boja = "";
    if (strtoupper(substr($row['Prezime'], 0, 1)) == "H") {
        $boja = " style='background-color:red;'";
    }

    echo "<tr$boja>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['ime'] . "</td>";
    echo "<td>" . $row['Prezime'] . "</td>";
    echo "<td>" . $row['spol'] . "</td>";
    echo "<td>" . $row['telefon'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['godine'] . "</td>";
    echo "<td>" . $row['hobi'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>