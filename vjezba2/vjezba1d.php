<?php
    $naslov = "Skillet - vjezba 1d";
    $autor = "Luka Kotorac";
    $opis = "Skillet je američki kršćanski rock sastav osnovan u Memphisu, Tennessee, 1996. godine.";
    
    $dozvoljeneTeme  = array("dark", "light");
    $dozvoljeneSlike = array(
        "fog"    => "img/fog.jpg",
        "album" => "img/album.jpg",
        "skillet"   => "img/skillet.jpeg"
    );

    $temaKey  = isset($_GET["tema"]) && in_array($_GET["tema"], $dozvoljeneTeme) ? $_GET["tema"] : "light";
    $slikaKey = isset($_GET["slika"]) && isset($dozvoljeneSlike[$_GET["slika"]]) ? $_GET["slika"] : "fog";
    $prikaziOpis = isset($_GET["opis"]);

    $slikaPath = $dozvoljeneSlike[$slikaKey];

    function h($s) { return htmlspecialchars($s, ENT_QUOTES, "UTF-8"); }

    if ($temaKey === "light") {
  $bg = "#f1f5f9";
  $card = "#ffffff";
  $text = "#160b0b";
  $muted = "#686e79";
  $accent = "#680808";
} else {
  $bg = "#240e0e"; 
  $card = "#ffffff";
  $text = "#160b0b";
  $muted = "#686e79";
  $accent = "#680808";
}
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
            --bg: <?php echo $bg; ?>;
            --card: <?php echo $card; ?>;
            --text: <?php echo $text; ?>;
            --muted: <?php echo $muted; ?>;
            --accent: <?php echo $accent; ?>;
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
        .btn, .btn:link, .btn:visited {
            display: inline-block;
            padding: 10px 16px;
            font: inherit;            
            line-height: 1;
            color: var(--accent);      
            background: transparent;  
            border: 1px solid var(--accent);
            border-radius: 10px;
            text-decoration: none;     
            cursor: pointer;
            -webkit-appearance: none;  
            appearance: none;
    }
        .btn:hover{
            background: var(--accent); color:#fff;
        }
        .button:focus-visible{
            outline: 3px solid var(--accent);
            outline-offset: 2px;
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
    <h1><?php echo h($naslov); ?></h1>
    <p>Ovu stranicu izradio/la je <strong><?php echo ($autor); ?></strong>.</p>

    <div class="figure">
      <img src="<?php echo h($slikaPath); ?>" alt="<?php echo ($slikaKey); ?>">
    </div>

    <?php if ($prikaziOpis): ?>
      <p><?php echo h($opis); ?></p>
    <?php endif; ?>

    <form method="get" action="vjezba1d.php">
      <fieldset>
        <legend>Odaberi temu</legend>
        <label><input type="radio" name="tema" value="dark"  <?php echo $temaKey==="dark" ? "checked" : ""; ?>>Dark</label>
        <label><input type="radio" name="tema" value="light" <?php echo $temaKey==="light" ? "checked" : ""; ?>>Light</label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>
        <label for="slika">Slika:</label>
        <select id="slika" name="slika">
          <option value="fog"    <?php echo $slikaKey === "fog"    ? "selected" : "";?>>Fog</option>
          <option value="album" <?php echo $slikaKey === "album" ? "selected" : "";?>>Album</option>
          <option value="skillet"   <?php echo $slikaKey === "skillet"   ? "selected" : "";?>>Skillet</option>
        </select>
      </fieldset>

      <label><input type="checkbox" name="opis" <?php echo $prikaziOpis ? "checked" : "";?>> Prikaži opis</label>

      <div class="row" style="margin-top:10px">
        <button class="btn" type="submit">Primijeni odabir</button>
        <a class="btn" href="vjezba1c.php">Natrag na vježba 1c</a>
      </div>
    </form>

    <p class="muted">© <?php echo date("Y"); ?> — Demo za PHP</p>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba1d.php -->