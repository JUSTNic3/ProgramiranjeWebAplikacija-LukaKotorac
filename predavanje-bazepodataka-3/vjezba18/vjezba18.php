<?php
$mysql = mysqli_connect("localhost", "root", "", "predavanje3-2") or die("Connection failed");

if(isset($_POST['edit'])) {

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $countrycode = $_POST['countrycode'];

    $query = "
        UPDATE users
        SET firstname='$firstname',
            lastname='$lastname',
            countrycode='$countrycode'
        WHERE id=$id
    ";

    mysqli_query($mysql, $query);
}


$query = "
    SELECT *
    FROM users
    LEFT JOIN countries
    ON countries.countrycode = users.countrycode
";

$result = mysqli_query($mysql, $query);


$countries_query = "SELECT * FROM countries";
$countries_result = mysqli_query($mysql, $countries_query);

$countries = [];

while($country = mysqli_fetch_assoc($countries_result)) {
    $countries[] = $country;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vjezba 18</title>
    <meta name="description" content="vjezba18">
</head>
<body>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<form method="POST">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">

    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">

    <select name="countrycode">

        <?php foreach($countries as $country) { ?>

            <option
                value="<?php echo $country['countrycode']; ?>"

                <?php
                if($country['countrycode'] == $row['countrycode']) {
                    echo "selected";
                }
                ?>
            >
                <?php echo $country['countryname']; ?>
            </option>

        <?php } ?>

    </select>

    <input type="submit" name="edit" value="Save">

</form>

<br>

<?php } ?>

</body>
</html>