<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBPHPSTORM</title>

</head>
<body>
    <form>
        <label for="menge">Menge in Liter</label><br>
        <input type="text" id="menge" name ="menge" value="<?php 
        if(isset($_REQUEST['sent']))
        echo $_GET['menge']?>"><br>
        <label for="menge2">Menge in Liter</label><br>
        <input type="text" id="menge2" name ="menge2" value="<?php 
        if(isset($_REQUEST['sent']))
        echo $_GET['menge2']?>"><br>
        <label for="preis">Preis/Liter</label><br>
        <input type="text" id="preis" name="preis" value="<?php 
        if(isset($_REQUEST['sent']))
        echo $_GET['preis']?>">
        <br>
        <input type="submit" name="sent">
    </form>
    <a href="index.php"><button>Reset</button></a>
    
    <?php
        if(isset($_REQUEST['menge'], $_REQUEST['menge2'], $_REQUEST['preis']) && !empty($_REQUEST['menge']) && !empty($_REQUEST['menge2']) && !empty($_REQUEST['preis'])){
            $gesamtBenzin = $_REQUEST['menge'] + $_REQUEST['menge2'];
            $errechneterpreis = $_REQUEST['menge'] * $_REQUEST['preis'] + $_REQUEST['menge2'] * $_REQUEST['preis'];
            echo 'Die Benzinkosten für ' . $gesamtBenzin . 'L, betragen €' . $errechneterpreis;
        }
        else{
            if(isset($_REQUEST['sent']))
            echo 'Bitte füllen Sie alle Felder aus';
        }
    ?>
</body>
</html>