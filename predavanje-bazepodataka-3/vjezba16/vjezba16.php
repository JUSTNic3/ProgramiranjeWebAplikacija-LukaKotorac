<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vjezba 16</title>
  <meta name="description" content="vjezba 16">
</head>
<body>
    <?php
    $mysql = mysqli_connect("localhost","root","","predavanje3") or die('Error connecting to MySQL server.');

    print'<h1>Registration form</h1>';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print'<p>You have been successfully registered</p>';
        print '<a href="vjezba16.php">Back to registration</a>';
    }
    else{
    print'
	<form action="" method="post">
        <label>First name:</label>
        <br>
        <input type="text" name="firstname" required="required" placeholder="Your name">
        <br>
        <br>
        <label>Last name:</label>
        <br>
        <input type="text" name="lastname" required="required" placeholder="Your last name">
        <br>
        <br>
        <label>E-mail:</label>
        <br>
        <input type="text" name="email" required="required" placeholder="Your e-mail">
        <br>
        <br>
        <label>Username: <span style="color:red">(Username must have at least 5 and less than 10 characters)</span></label>
        <br>
        <input type="text" name="username" required="required" placeholder="Your username" minlength="5" maxlength="10">
        <br>
        <br>
        <label>Password: <span style="color:red">(Password must have at least 4 characters)</span></label>
        <br>
        <input type="text" name="password" required="required" placeholder="Your password" minlength="5">
        <br>
        <br>
        <label>Choose your country:</label>
        <br>
        <select name="country">
            <br>
            <option value="ALB">Albania</option>
            <option value="CRO">Croatia</option>
            <option value="ENG">England</option>
            <option value="FRA">France</option>
            <option value="GER">Germany</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>';}


    $firstname=isset($_POST["firstname"]) ? $_POST["firstname"] : "";
    $lastname=isset($_POST["lastname"]) ? $_POST["lastname"] : "";
    $email=isset($_POST["email"]) ? $_POST["email"] : "";
    $username=isset($_POST["username"]) ? $_POST["username"] : "";
    $password=isset($_POST["password"]) ? $_POST["password"] : "";
    $country=isset($_POST["country"]) ? $_POST["country"] : "";


    $sql = "INSERT INTO registration
            (firstname, lastname, email, username, pass, country)
            VALUES
            ('$firstname', '$lastname', '$email', '$username', '$password', '$country')";
    print'<br>';
    if (mysqli_query($mysql, $sql)) {
        echo "Podaci su spremljeni.";
    } else {
        echo "Greška: " . mysqli_error($mysql);
    }
    ?>
</body>
</html>