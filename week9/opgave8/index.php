<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opgave 8</title>
</head>
<style>
    #form {
        width: 25%;
        border: 1px solid black;
        float: left;
        background-color: #5FAFD4;
    }
    #form #wielen {
        width: 15%;
    }
    #resultaat {
        border: 1px solid black;
        width: 25%;
        background-color: wheat;
    }
</style>
<body>
    <div id="form">
        <form method="post" action="index.php">
            <label for="fiets">Heb jij een fiets?</label>
            <select id="fiets" name="fiets">
                <option value=1>Ja</option>
                <option value=0>Nee</option>
            </select>
            <br>
            <label for="wielen">Hoeveel wielen heeft jouw voertuig?</label>
            <input id="wielen" type="number" name="wielen">
            <br>
            <input type="submit" value="Verstuur">
        </form>
    </div>

    <div id="resultaat">
        <?php if($_POST != NULL) {
            $fiets = $_POST["fiets"];
            $wielen = $_POST["wielen"];
            if($wielen == NULL)
                $wielen = 0;

            if($fiets == 1 && $wielen == 1) {
                print("aha, je hebt een circusfiets!");
            } elseif ($fiets == 1 && $wielen == 2) {
                print("je hebt een normale fiets!");
            } elseif ($fiets == 1 && $wielen >= 3) {
                print("je hebt een rare fiets!");
            } elseif ($fiets == 0 && $wielen == 4) {
                print("je hebt een auto!");
            } elseif ($fiets == 0 && $wielen == 0) {
                print("jij hebt vast en zeker een boot!");
            } else {
                print("ik heb geen idee wat jij gebruikt!");
            }
        }?>
    </div>
</body>
</html>