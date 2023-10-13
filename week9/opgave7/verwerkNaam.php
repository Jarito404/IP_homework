<?php
if($_POST["naam"] == NULL) {
    header("Location: index.php");//assertion tegen een lege naam
}

$voornaam = $_POST["naam"];
$aantal = $_POST["aantal"];

for($i = 0; $i < $aantal; $i++) {
    print("<b>$voornaam</b> ");
}