<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labos 4 - zadatak 2</title>
</head>
<body>

<h2>Prijava</h2>

<form action="" method="post">
    Korisničko ime:<br>
    <input type="text" name="username" required><br><br>

    Lozinka:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Prijava">
</form>

</body>
</html>


<?php
session_start();

$conn = new mysqli("localhost", "root", "", "labos4");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {

            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] == 'admin') {

                echo "Dobro došli. Vaša razina je administrator.<br><br>";
                echo '<a href="sesija.php">NEXT</a>';

            } else {

                echo "Dobro došli.<br><br>";
                echo '<a href="sesija.php">NEXT</a>';

            }

        } else {

            echo "Pogrešna lozinka.";

        }

    } else {

        echo "Korisnik ne postoji.";

    }
}
?>