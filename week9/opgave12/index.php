<?php
function berekenSom($array) {
    $som = 0;
    foreach($array as $nummer) {
        $som += (float) $nummer;
    }

    return $som;
}

if($_POST != NULL) {
    $array = explode(" ",$_POST["nummers"]);
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Opgave 12</title>
</head>
<style>
    #form {
        float: left;
    }
    #form form input {
        margin-top: 1%;
    }
    #results {
        float: right;
        width: 25%;
    }
</style>
<body>
    <h1>Getallenlijst</h1>

    <div id="form">
        <form method="post" action="index.php">
            <label>
                Vul nummers in gescheiden met een spatie (letters tellen als 0):<br>
                <input type="text" name="nummers">
            </label>
            <br>
            <input type="submit" value="Verwerk">
        </form>
    </div>

<?php if($_POST != NULL) {?>
    <div id="results">
        <b>Resultaten:</b><br>
        <?php
        print("Som is ".berekenSom($array)."<br>"
        ."Aantal is ".count($array)."<br>"
        ."Maximum is ".max($array)."<br>"
        ."Minimum is ".min($array)."<br>");
        ?>
    </div>
<?php }?>
</body>
</html>