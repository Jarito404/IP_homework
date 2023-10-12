<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset=”utf-8”>
    <title>Opgave 1</title>
</head>
<style>
    body {
        background-color: dimgray;
    }
    a {
        float: left;
        font-size: 100px;
        background-color: aqua;
        color: white;
    }
    a:hover {
        background-color: aquamarine;
    }
</style>
<body>
<?php
$naam = $_POST["naam"];
$leeftijd = $_POST["leeftijd"];

if($naam == NULL) {//als beide niet null zijn, want met post kan je null sturen
    print("<h1>FOUT: JE HEBT GEEN NAAM INGEVOERD</h1>");
}
if($leeftijd == NULL) {
    print("<h1>FOUT: JE HEBT GEEN LEEFTIJD INGEVULD</h1>");
}
if($naam != NULL && $leeftijd != NULL) {

    if($leeftijd < 0) {
        print("<h1>FOUT: MENS MOET GEBOREN ZIJN (OUDER DAN 0)</h1>");
    } elseif($leeftijd < 18) {
        print("<h1>". "$naam is over " . (18-$leeftijd). " jaren volwassen!" . "</h1>");
    } elseif($leeftijd >= 21 && $leeftijd <= 65) {
        print("<h1>". "$naam is nu eigenlijk pas een volwassen! ($leeftijd)"."</h1>");
    } else {
        print("<h1>". "$naam heeft een leeftijd van $leeftijd!"."</h1>");
    }
}
?>

<a href="index.php">terug naar hoofdpagina!</a>
</body>
</html>
