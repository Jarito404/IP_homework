<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Opgave 2</title>
</head>
<style>
    #introduction {
        width: 25%;
        float: left;
        border: 1px solid black;
    }
    #form {
        float: left;
        position: absolute;
        top: 10%;
        width: 10%;
    }
</style>
<body>
    <div id="introduction">
        Beste student, je hebt meegedaan aan de introductie. We willen graag weten wat je daar van vond. Vul je algemene indruk in, geef de introductie een rapportcijfer en vul tenslotte je leeftijd in. Verstuur daarna het formulier.
    </div>

    <div id="form">
        <form method="post" action="verwerk.php">
            <label>
                Rapportcijfer: <input type="text" id="cijfer" name="cijfer">
            </label>
            <label>
                Leeftijd: <input type="number" name="leeftijd">
            </label>
            <label>
                Algemene indruk<br>
                <input type="radio" id="super" name="indruk" value="Super">
                <label for="super">Super</label><br>
                <input type="radio" id="goed" name="indruk" value="Goed">
                <label for="goed">Goed</label><br>
                <input type="radio" id="matig" name="indruk" value="Matig">
                <label for="matig">Matig</label><br>
                <input type="radio" id="slecht" name="indruk" value="Slecht">
                <label for="slecht">Slecht</label><br>
            </label>
            <input type="submit" value="Verstuur!">
        </form>
    </div>
</body>
</html>