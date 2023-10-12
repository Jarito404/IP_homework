<?php
if(!isset($_GET["aantal"])) {//als aantal niet bestaat wordt je geredirect naar de index page
    header("Location: index.html");
    exit();
}

$aantal = (int) $_GET["aantal"];//aantal is 0 als er iets anders dan een integer in de url staat
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Opgave 4</title>
</head>
<style>
    body {
        font-size: 25px;
        background-color: dimgray;
        color: wheat;
    }
    a {
        background-color: aquamarine;
    }
    a:hover {
        background-color: #5FAFD4;
    }
    #foutMelding {
        font-size: 50px;
    }
    #dobbelspel {
        border: 1px solid black;
        width: 25%;
        float: left;
    }
    #stats {
        border: 1px solid black;
        width: 25%;
        float: right;
    }
</style>
<body>
<a href="index.html">Terug naar hoofdpagina.</a><br>
    <?php
        if($aantal <= 0) {?>
            <div id="foutMelding">
                <h1>FOUT: VERKEERDE INPUT (GEEN CIJFER GROTER DAN 0)!!</h1>
            </div>
        <?php } else {?>
            <div id="dobbelspel">
                <?php
                $som = 0;
                $zessen = 0;
                for($i = 1; $i <= $aantal; $i++) {
                    $roll = rand(1,6);
                    $som += $roll;
                    if($roll == 6)
                        $zessen++;

                    print("Worp $i: " . $roll . "<br>");
                }
                ?>
            </div>

            <div id="stats">
                <b>Statistieken</b><br>
                <?php
                print("Worpen: $aantal<br>".
                    "Totaal: $som<br>".
                    "Gemiddelde ongeveer: " . round(($som / $aantal) * 10000) / 100 . "<br>".//*10000 / 100 voor 2 decimalen
                    "Zessen gegooid: $zessen<br>".
                    "Percentage ongeveer: ". round(($zessen/$aantal) * 1000 ) / 10 . "%");//*1000 / 10 voor 1 decimaal
                ?>
            </div>
        <?php }
    ?>
</body>
</html>
