<?php
session_start();
if($_POST != NULL) {
    if($_POST["choice"] == "Verhoog thuisscore"){
        $_SESSION["thuis"]++;
    } elseif($_POST["choice"] == "Verhoog uitscore") {
        $_SESSION["uit"]++;
    }
}
header("Location: index.php");
exit();