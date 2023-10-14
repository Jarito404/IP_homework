<?php
session_start();
if($_POST != NULL) {
    if ($_POST["waarde"] > 0 && $_POST["waarde"] <= 5)
        $_SESSION["waardes"][] = $_POST["waarde"];
    else
        print("Verkeerde waarde! (" . $_POST["waarde"]. ")<br>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
if(isset($_SESSION["waardes"])) {
    foreach($_SESSION["waardes"] as $waarde) {
        for($i = 0;$i < $waarde; $i++) {
            print("*");
        }
        print("<br>");
    }
}?>
<form method="post" action="waarde.php">
    <label for="waarde">
        Geef een waarde:<br>
        <input id="waarde" type="number" name="waarde">
    </label>
    <br>
    <input type="submit">
</form>
</body>
</html>