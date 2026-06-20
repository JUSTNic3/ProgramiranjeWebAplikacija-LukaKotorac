<?php

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    print '<section class="news-section">
        <h2>ADMIN PANEL</h2>
        <p>Pristup odbijen.</p>
    </section>';
    exit;
}

if (isset($_POST['add_news'])) {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);
    $news_image = mysqli_real_escape_string($conn, $_POST['news_image']);
    $created_at = mysqli_real_escape_string($conn, $_POST['created_at']);

    $article_title = mysqli_real_escape_string($conn, $_POST['article_title']);
    $article_date = mysqli_real_escape_string($conn, $_POST['article_date']);
    $article_image = mysqli_real_escape_string($conn, $_POST['article_image']);
    $lead_text = mysqli_real_escape_string($conn, $_POST['lead_text']);

    $heading_1 = mysqli_real_escape_string($conn, $_POST['heading_1']);
    $paragraph_1 = mysqli_real_escape_string($conn, $_POST['paragraph_1']);
    $paragraph_2 = mysqli_real_escape_string($conn, $_POST['paragraph_2']);

    $heading_2 = mysqli_real_escape_string($conn, $_POST['heading_2']);
    $paragraph_3 = mysqli_real_escape_string($conn, $_POST['paragraph_3']);
    $paragraph_4 = mysqli_real_escape_string($conn, $_POST['paragraph_4']);

    $heading_3 = mysqli_real_escape_string($conn, $_POST['heading_3']);
    $paragraph_5 = mysqli_real_escape_string($conn, $_POST['paragraph_5']);
    $paragraph_6 = mysqli_real_escape_string($conn, $_POST['paragraph_6']);

    $news_query = "INSERT INTO news (title, summary, image, created_at)
                   VALUES ('$title', '$summary', '$news_image', '$created_at')";

    if (mysqli_query($conn, $news_query)) {

        $news_id = mysqli_insert_id($conn);

        $article_query = "INSERT INTO articles (
            news_id,
            title,
            article_date,
            image,
            lead_text,
            heading_1,
            paragraph_1,
            paragraph_2,
            heading_2,
            paragraph_3,
            paragraph_4,
            heading_3,
            paragraph_5,
            paragraph_6
        ) VALUES (
            '$news_id',
            '$article_title',
            '$article_date',
            '$article_image',
            '$lead_text',
            '$heading_1',
            '$paragraph_1',
            '$paragraph_2',
            '$heading_2',
            '$paragraph_3',
            '$paragraph_4',
            '$heading_3',
            '$paragraph_5',
            '$paragraph_6'
        )";

        if (mysqli_query($conn, $article_query)) {
            $success = "Novost i članak su uspješno dodani.";
        } else {
            $error = "Novost je dodana, ali članak nije dodan.";
        }

    } else {
        $error = "Greška prilikom dodavanja novosti.";
    }
}

print '<section class="news-section">
    <h2>ADMIN PANEL</h2>
    <p>Dobrodošli, <strong>' . htmlspecialchars($_SESSION['username']) . '</strong>.</p>';

if (isset($success)) {
    print '<p class="success-message">' . htmlspecialchars($success) . '</p>';
}

if (isset($error)) {
    print '<p class="error-message">' . htmlspecialchars($error) . '</p>';
}

print '
<form action="index.php?menu=7" method="post" class="admin-form">

    <h3>Podaci za novost</h3>

    <label>Naslov novosti</label>
    <input type="text" name="title" required>

    <label>Kratki opis</label>
    <textarea name="summary" required></textarea>

    <label>Slika novosti</label>
    <input type="text" name="news_image" placeholder="npr. solo-leveling.jpg" required>

    <label>Datum novosti</label>
    <input type="date" name="created_at" required>

    <h3>Podaci za članak</h3>

    <label>Naslov članka</label>
    <input type="text" name="article_title" required>

    <label>Datum članka</label>
    <input type="date" name="article_date" required>

    <label>Banner slika članka</label>
    <input type="text" name="article_image" placeholder="npr. solo-leveling-banner.jpg" required>

    <label>Uvodni tekst</label>
    <textarea name="lead_text" required></textarea>

    <label>Prvi podnaslov</label>
    <input type="text" name="heading_1" required>

    <label>Prvi odlomak</label>
    <textarea name="paragraph_1" required></textarea>

    <label>Drugi odlomak</label>
    <textarea name="paragraph_2" required></textarea>

    <label>Drugi podnaslov</label>
    <input type="text" name="heading_2" required>

    <label>Treći odlomak</label>
    <textarea name="paragraph_3" required></textarea>

    <label>Četvrti odlomak</label>
    <textarea name="paragraph_4" required></textarea>

    <label>Treći podnaslov</label>
    <input type="text" name="heading_3" required>

    <label>Peti odlomak</label>
    <textarea name="paragraph_5" required></textarea>

    <label>Šesti odlomak</label>
    <textarea name="paragraph_6" required></textarea>

    <input type="submit" name="add_news" value="Dodaj novost">

</form>

</section>';

?>