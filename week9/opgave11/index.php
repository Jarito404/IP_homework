<?php
session_set_cookie_params(300,"/");//5 minuten voordat session automatisch eindigt
session_start();

if(!isset($_SESSION["thuis"])) {//declareer de sessie variabelen
    $_SESSION["thuis"] = 0;
}
$thuis = $_SESSION["thuis"];

if(!isset($_SESSION["uit"])) {
    $_SESSION["uit"] = 0;
}
$uit = $_SESSION["uit"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opgave 11</title>
</head>
<style>
    .score {
        height: 1%;
        width: 25%;
    }
    .score #scoreValue {
        border: 1px solid black;
        width: 25%;
    }
    .score .child {
        display: inline-block;
    }
</style>
<body>
    <h1>Scorebord</h1>

    <div class="score">
        <p class="child">Thuis:</p>
        <p class="child" id="scoreValue">
            <?php
                echo $thuis;
            ?>
        </p>
        <form class="child" method="post" action="increment.php">
            <input type="submit" name="choice" value="Verhoog thuisscore">
        </form>
    </div>

    <div class="score">
        <p class="child">Uit:</p>
        <p class="child" id="scoreValue">
            <?php
                echo $uit;
            ?>
        </p>
        <form class="child" method="post" action="increment.php">
            <input type="submit" name="choice" value="Verhoog uitscore">
        </form>
    </div>
</body>
</html>