<?php

$query = "SELECT * FROM articles WHERE news_id = $id";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);

    print '
    <section class="article-container">
        <article>

            <h1>' . htmlspecialchars($row['title']) . '</h1>

            <p class="date">' . date("d.m.Y.", strtotime($row['article_date'])) . '</p>

            <img 
                src="img/' . htmlspecialchars($row['image']) . '" 
                alt="' . htmlspecialchars($row['title']) . '" 
                class="featured-image"
            >

            <p class="lead">' . htmlspecialchars($row['lead_text']) . '</p>

            <section class="content">

                <h2>' . htmlspecialchars($row['heading_1']) . '</h2>
                <p>' . htmlspecialchars($row['paragraph_1']) . '</p>
                <p>' . htmlspecialchars($row['paragraph_2']) . '</p>

                <h2>' . htmlspecialchars($row['heading_2']) . '</h2>
                <p>' . htmlspecialchars($row['paragraph_3']) . '</p>
                <p>' . htmlspecialchars($row['paragraph_4']) . '</p>

                <h2>' . htmlspecialchars($row['heading_3']) . '</h2>
                <p>' . htmlspecialchars($row['paragraph_5']) . '</p>
                <p>' . htmlspecialchars($row['paragraph_6']) . '</p>

            </section>

        </article>
    </section>';
}
else
{
    print '<p>Članak nije pronađen.</p>';
}

?>