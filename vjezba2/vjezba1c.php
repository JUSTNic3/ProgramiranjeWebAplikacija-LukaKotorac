<?php
    $naslov = "Skillet - vjezba 1c";
    $autor = "Luka Kotorac";
    $opis = "Skillet je američki kršćanski rock sastav osnovan u Memphisu, Tennessee, 1996. godine.";
    $linkInfo = "https://en.wikipedia.org/wiki/Skillet_(band)";
    $linkNatrag = "vjezba1b.php";
    $link_text = "Saznaj više o Skillet-u";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo ($naslov); ?></title>
  <meta name="description" content="Prvi PHP dokument s osnovnim CSS stilom.">
  <style>
        :root{
            --bg: #240e0e;
            --card: #ffffff;
            --text: #000000;
            --muted: #6b7280;
            --accent: #680808;
        }
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--text);
        }
        h1{
            margin-top: 0px;
            margin-bottom: 13px;
            font-size: 2 rem;
        }
        p{
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .wrap{
            max-width: 720px;
            margin: 48px auto;
            background: var(--card);
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }
        .btn{
            display: inline-block;
            padding: 10px 16px;
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;
            color: var(--accent);
        }
        .btn:hover{
            background: var(--accent); color:#fff;
        }
        .btn:focus-visible{
            outline: 3px solid var(--accent);
        }
        .btn:active {
            opacity: .9;
        }
        .muted{
            font-size: 0.9 rem;
            color:var(--muted);
        }
        .row{ 
            display:flex; 
            gap:12px; 
            flex-wrap:wrap; 
            margin-top:10px;
        }
  </style>
</head>
    <body>
        <main class="wrap">
            <h1><?php echo ($naslov); ?></h1>
            <p>Ovu stranicu izradio je <strong><?php echo ($autor)?></strong>.</p>
            <p><?php echo ($opis)?></p>
            <div class="row">
                <a class="btn" href="<?php echo $linkInfo; ?>" target="_blank">Saznaj više o Skillet-u</a>
                <a class="btn" href="<?php echo $linkNatrag; ?>">Natrag na vježba 1b</a>
            </div>
            <p class="muted">&copy; <?php echo date('Y'); ?> — Demo za PHP</p>
        </main>
    </body>
</html>
<!-- Naziv datoteke: vjezba1c.php -->