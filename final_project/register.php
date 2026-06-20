<?php

if (isset($_POST['register'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        $error = "Lozinke se ne podudaraju.";
    } else {

        $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $error = "Korisničko ime ili email već postoji.";
        } else {

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $insert_query = "INSERT INTO users (username, email, password, role)
                             VALUES ('$username', '$email', '$hashed_password', 'user')";

            if (mysqli_query($conn, $insert_query)) {
                $success = "Registracija uspješna. Sada se možete prijaviti.";
            } else {
                $error = "Greška prilikom registracije.";
            }
        }
    }
}

print '<section class="news-section">
    <h2>REGISTRACIJA</h2>';

if (isset($error)) {
    print '<p class="error-message">' . htmlspecialchars($error) . '</p>';
}

if (isset($success)) {
    print '<p class="success-message">' . htmlspecialchars($success) . '</p>';
}

print '
<form action="index.php?menu=8" method="post" class="login-form">

    <label for="username">Korisničko ime</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Lozinka</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Ponovi lozinku</label>
    <input type="password" id="confirm_password" name="confirm_password" required>

    <input type="submit" name="register" value="Registracija">

</form>

<p class="form-link">Već imate račun? <a href="index.php?menu=5">Prijava</a></p>

</section>';

?>