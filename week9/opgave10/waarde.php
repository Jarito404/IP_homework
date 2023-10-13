<?php
session_start();
if($_POST != NULL)
    $_SESSION["waardes"][] = $_POST["waarde"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php print_r($_SESSION);?>
<form method="post" action="check.php">
    <label for="waarde">
        Geef een waarde:<br>
        <input id="waarde" type="number" name="waarde">
    </label>
    <br>
    <input type="submit">
</form>
</body>
</html>