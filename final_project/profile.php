<?php

if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            header("Location: index.php?menu=5");
            exit;

        } else {
            $error = "Pogrešna lozinka.";
        }

    } else {
        $error = "Korisnik ne postoji.";
    }
}

print '<section class="news-section">
    <h2>PROFIL</h2>';

if (isset($_SESSION['user_id'])) {

    print '
    <p>Dobrodošli, <strong>' . htmlspecialchars($_SESSION['username']) . '</strong>.</p>
    <p>Uloga: ' . htmlspecialchars($_SESSION['role']) . '</p>';

    if ($_SESSION['role'] == 'admin') {
        print '<p><a href="index.php?menu=7">Admin panel</a></p>';
    }
    print
        '<p><a href="logout.php">Odjava</a></p>';

} else {

    if (isset($error)) {
        print '<p class="error-message">' . htmlspecialchars($error) . '</p>';
    }

    print '
    <form action="index.php?menu=5" method="post" class="login-form">

        <label for="username">Korisničko ime</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Lozinka</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" name="login" value="Prijava">

    </form>

    <p class="form-link">Nemate račun? <a href="index.php?menu=8">Registracija</a></p>';
}

print '</section>';

?>