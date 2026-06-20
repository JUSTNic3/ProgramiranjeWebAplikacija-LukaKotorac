<?php

$query = "SELECT * FROM news ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

print '<section class="news-section">
    <h2>NOVOSTI</h2>
    <div class="news-list">';

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        print '
        <a href="index.php?menu=6&id=' . $row['id'] . '">
        <article class="news-item">
            <img src="img/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['title']) . '">

            <div class="news-info">
                <h3> <a href="index.php?menu=6&id=' . $row['id'] . '">' . htmlspecialchars($row['title']) .  '</h3>

                <p>' . htmlspecialchars($row['summary']) . '</p>

                <small>' . date("d.m.Y.", strtotime($row['created_at'])) . '</small>
            </div>
        </article> 
        </a>';
    }

} else {
    print '<p>Trenutno nema novosti.</p>';
}

print '
    </div>
</section>';

?>