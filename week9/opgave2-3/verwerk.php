<?php
if(!isset($_POST["indruk"])) {
    header("Location: index.php");//een assertion om te kijken of er wel een indruk wordt meegegeven. ook zodat we geen warning krijgen in dat geval
    exit();
}

$indrukArray = array(
    1 => "Slecht",
    2 => "Slecht",
    3 => "Slecht",
    4 => "Matig",
    5 => "Matig",
    6 => "Goed",
    7 => "Goed",
    8 => "Goed",
    9 => "Super",
    10 => "Super",
);//voor de array/tabel van opgave 3

$cijfer = $_POST["cijfer"];
$leeftijd = $_POST["leeftijd"];
$indruk = $_POST["indruk"];

$errorCijfer = "een rapportcijfer moet tussen 1 en 10 liggen";
$errorLeeftijd = "je moet tussen 16 en 120 jaar zijn";

function checkRapport($cijfer) {
    return !($cijfer >= 1 && $cijfer <= 10);//return true als het cijfer niet goed is
}

function checkLeeftijd($leeftijd) {
    return !($leeftijd >= 16 && $leeftijd <= 120);//return true als de leeftijd niet goed is
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Opgave 2</title>
</head>
<style>
    #result {
        border: 1px solid black;
        width: 25%;
    }
</style>
<body>
    <?php
    if($cijfer == NULL && $leeftijd == NULL) {//als beide  null zijn, dan is dat niet goed
        print("<h1>FOUT: JE HEBT GEEN CIJFER OF LEEFTIJD INGEVOERD</h1>");
    } elseif($cijfer == NULL) {
        print("<h1>FOUT: JE HEBT GEEN CIJFER INGEVOERD</h1>");
    } elseif($leeftijd == NULL) {
        print("<h1>FOUT: JE HEBT GEEN LEEFTIJD INGEVOERD</h1>");
    }

    //als de input anders dan null is
    elseif(checkRapport($cijfer) && checkLeeftijd($leeftijd)) {//beide leeftijd en cijfer zijn niet goed
        print("Hey, $errorCijfer en $errorLeeftijd!");
    } elseif(checkRapport($cijfer) && !checkLeeftijd($leeftijd)) {//alleen cijfer is niet goed
        print("Hey, $errorCijfer!");
    } elseif(!checkRapport($cijfer) && checkLeeftijd($leeftijd)) {//aleen leeftijd is niet goed
        print("Hey, $errorLeeftijd!");
    }

    //pas als alle checks false opleveren is de input goed
    else {
        if($indrukArray[$cijfer] != $indruk) {
            print("Dus je beweert dat $cijfer gewoon " . lcfirst($indruk) . " is?" . "<br>");
        } else {
        ?>
        <div id="result">
            Je geeft de intro een <?php echo $cijfer ?><br>
            Je bent volgens je eigen zeggen <?php echo $leeftijd ?> jaar oud<br>
            Je vond de algemene indruk van de intro <?php echo $indruk ?>
        </div>
    <?php }
    }
    ?>
    <div id="redirect">
        <br><a href="index.html">Terug naar evaluatie.</a>
    </div>
</body>
</html>
