<?php

print '<section class="news-section">
    <h2>NOVOSTI</h2>
    <div class="news-grid">';

$query_news = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
$result_news = mysqli_query($conn, $query_news);

if (mysqli_num_rows($result_news) > 0) {

    while ($row = mysqli_fetch_assoc($result_news)) {

        print '
            <article class="news-card">
                <a href="index.php?menu=6&id=' . $row['id'] . '">
                    <img src="img/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['title']) . '">
                    <h3>' . htmlspecialchars($row['title']) . '</h3>
                </a>
            </article>';
    }

} else {
    print '<p>Trenutno nema novosti.</p>';
}

print '
    </div>
</section>';


print '<section class="news-section">
    <h2>OCJENE</h2>
    <div class="news-grid">';

$query_reviews = "SELECT * FROM reviews ORDER BY id DESC LIMIT 3";
$result_reviews = mysqli_query($conn, $query_reviews);

if (mysqli_num_rows($result_reviews) > 0) {

    while ($row = mysqli_fetch_assoc($result_reviews)) {

        print '
        <article class="news-card">
            <img src="img/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['anime_name']) . '">
            <h3>' . htmlspecialchars($row['anime_name']) . '</h3>
            <p>Ocjena: ' . htmlspecialchars($row['rating']) . '/10</p>
        </article>';
    }

} else {
    print '<p>Trenutno nema ocjena.</p>';
}

print '
    </div>
</section>';

?>