<?php

session_start();
include("db.php");

if(isset($_GET['menu']))
{
    $menu = (int)$_GET['menu'];
}
else
{
    $menu = 1;
}

if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];
}
else
{
    $id = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniNews</title>
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="Stranica sa novostima u vezi anime svijeta">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sansation&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="logo">
            <h1>AniNews</h1>
        </div>

        <?php
            print '
                <nav>';
			    include("menu.php");
		    print '</nav>';
        ?>
    </header>

<main class="container">

<?php

if($menu == 1)
    include("home.php");
elseif($menu == 2)
    include("news.php");
elseif($menu == 3)
    include("reviews.php");
elseif($menu == 4)
    include("aboutus.php");
elseif($menu == 5)
    include("profile.php");
elseif($menu == 6)
    include("article.php");
elseif($menu == 7)
    include("admin.php");
elseif($menu == 8)
    include("register.php");
else
    include("home.php");

?>

</main>

    <footer>
        <?php print '<p>Copyright &copy; ' . date('Y') . ' Luka Kotorac</p> '?>
    </footer>

</body>
</html>