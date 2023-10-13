<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opgave 6</title>
</head>
<style>
    .form {
        border: 1px solid black;
        float: left;
    }
    .form p {
        margin-top: 0;
    }
    #submitButton {
        margin-top: 10%;
        margin-bottom: 5%;
        margin-left: 5%;
    }
    .form form input {
        float: left;
    }
    .form form label {
        float: left;
    }
    .form form label + input {/* dit en de twee hiervoor zijn voor het stapelen van de radio buttons*/
        clear: both;
    }
</style>
<body>
    <div class="form">
        <p>Welke browser heeft je voorkeur?</p>
        <?php
        if(isset($_GET["prev"])) {?>
            <form method="post" action="verwerk.php?prev=<?php echo $_GET["prev"];?>">
        <?php } else {
        ?>      <form method="post" action="verwerk.php">
            <?php
            }
            ?>
            <input type="radio" id="ie" name="keuze" value="Internet Explorer">
            <label for="ie">Internet Explorer</label>


            <input type="radio" id="ff" name="keuze" value="FireFox">
            <label for="ff">FireFox</label>


            <input type="radio" id="chrome" name="keuze" value="Chrome">
            <label for="chrome">Chrome</label>


            <input type="radio" id="safari" name="keuze" value="Safari">
            <label for="safari">Safari</label>

            <input type="submit" id="submitButton" value="Verstuur!">
        </form>
    </div>
</body>
</html>