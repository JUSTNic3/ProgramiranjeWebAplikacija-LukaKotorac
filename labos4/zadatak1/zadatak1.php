<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labos 4 - zadatak 1</title>
</head>
<body>

<h2>Registracija korisnika</h2>

<form action="" method="post">
    <label>Korisničko ime:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Lozinka:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Registriraj se</button>
</form>

</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "labos4");

if ($conn->connect_error) {
    die("Greška pri povezivanju: " . $conn->connect_error);
}

$username = isset($_POST["username"]) ? $_POST["username"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    echo "Korisničko ime se već koristi";

} else {

    
    $hashedPassword = password_hash($password, CRYPT_BLOWFISH);

    
    $sql = "INSERT INTO users (username, password, role)
            VALUES (?, ?, 'user')";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registracija je uspješna";
    } else {
        echo "Greška prilikom registracije";
    }
}

$stmt->close();
$conn->close();

?>