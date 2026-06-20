<?php

$query = "SELECT * FROM reviews ORDER BY rating DESC";
$result = mysqli_query($conn, $query);

print '<section class="news-section">
    <h2>OCJENE</h2>
    <div class="news-grid">';

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

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