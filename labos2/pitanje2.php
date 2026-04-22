<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="utf-8">
        <title>Labos2-Pitanje2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <style>
            table, td{
                border: 1px solid black;
            }
            table{width:20em;height:10em;}
        </style>
    </head>
    <body>
        <form action="" method="post">
            <label>Odaberite broj redaka tablice:<br></label>
            <input type="radio" name="retci" value="2"> 2
            <br>
            <input type="radio" name="retci" value="4"> 4
            <br>
            <input type="radio" name="retci" value="6"> 6
            <hr>
            <label>Odaberite broj stupaca tablice:<br></label>
            <input type="radio" name="stupci" value="4"> 4
            <br>
            <input type="radio" name="stupci" value="6"> 6
            <br>
            <input type="radio" name="stupci" value="8"> 8
            <hr>
            <input type="submit" value="Napravi tablicu">
        </form>
    </body>
</html>

<?php
    $retci=isset($_POST["retci"]) ? $_POST["retci"] : "";
    $stupci=isset($_POST["stupci"]) ? $_POST["stupci"] : "";
    echo "<table>";
    if($retci==2){
        for($i=0;$i<$retci;$i++)
            {
                echo "<tr>";
                if($stupci==4){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==6){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==8){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
    }
    else if($retci==4){
        for($i=0;$i<$retci;$i++)
            {
                echo "<tr>";
                if($stupci==4){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==6){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==8){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
    }
    else if($retci==6){
        for($i=0;$i<$retci;$i++)
            {
                echo "<tr>";
                if($stupci==4){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==6){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                else if($stupci==8){
                    for($j=0;$j<$stupci;$j++){
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
    }
    echo "</table>";
?>