<?php
if(!isset($_GET["aantal"])) {//als aantal niet bestaat wordt je geredirect naar de index page
    header("Location: index.html");
    exit();
}

$aantal = (int) $_GET["aantal"];//aantal is 0 als er iets anders dan een integer in de url staat
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Opgave 4</title>
</head>
<style>
    #foutMelding {
        font-size: 50px;
    }
    #dobbelspel {
        font-size: 25px;
        border: 1px solid black;
        width: 25%;
        float: left;
    }
    a {
        font-size: 25px;
        background-color: aquamarine;
    }
    a:hover {
        background-color: #5FAFD4;
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
                for($i = 1; $i <= $aantal; $i++) {
                    print("Worp $i: " . rand(1,6) . "<br>");
                }
                ?>
            </div>
        <?php }
    ?>
</body>
</html>
