<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vjezba 7 - izračun ocjene</title>
        <meta name="description" content="vjezba 6">
        <style>
            body{ 
                font-family: 'Open Sans Condensed'; 
                font-size: 110%; 
                color: #232323; 
                width: 50%; 
                margin: 0 auto; 
                margin-top: 2em; 
            } 
            input[type="number"]{ 
                outline: none; 
                display: block; 
                width: 100%; 
                padding: 5px; 
                border: none; 
                border-bottom: 1px solid #ddd; 
                margin-bottom: 10px; 
                font: 15px Arial, Helvetica, sans-serif; 
                height: 45px; 
                font-family: 'Open Sans Condensed', arial, sans; 
            } 
            label { 
                width: 250px; 
                display:inline-block; 
            } 
            .blok { margin: 4px 0; } 
            input[type="submit"] { 
                background-color: #42caca; 
                display: inline-block; 
                color: #302e2e; 
                font-family: 'Open Sans Condensed', arial, sans; 
                font-size: 18px; 
                padding: 5px 15px; 
                text-transform: uppercase;
            } 
        </style>
    </head>
    <body>
        <h1>Izračun završne ocjene</h1>
        <p>Potrebno je napraviti formu za izračun ocjene iz kolokvija. Imamo uvjet da moramo izračunati srednju ocjenu iz prvog i drugog kolokvija. Ukoliko je jedan od kolokvija negativan, krajnja ocjena je negativna. Drugi uvjet je da ocjena ne smije biti manja od 1 i veća od 5</p>
        <form action="izracun_vjezba7.php" method="post">
            <div class = "blok">
                <label for="prvi">Ocjena prvoga kolokvija:</label>
                <input id="prvi" name="prvi" type="number" min="1" max="5" required="required">
                <br>
            </div>
            <div class = "blok">
                <label for="drugi">Ocjena drugoga kolokvija:</label>
                <input id="drugi" name="drugi" type="number" min="1" max="5" required="required">
                <br>
            </div>
            <div class = "blok">
                <input type="submit" value="Pošalji">
            </div>
        </form>
    </body>
</html>
<!-- Naziv datoteke: vjezba7.php -->