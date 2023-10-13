<?php
if($_POST == NULL) {
    header("Location: index.php");//assertion tegen een leeg antwoord
}


print("Jij gebruikt bij voorkeur " . $_POST["keuze"] . ".<br>");

if(isset($_GET["prev"])) {
    if ($_POST["keuze"] != $_GET["prev"]) {
        print("Je koos eerst voor ".$_GET["prev"].", maar je bent overgestapt. Een goed keuze!");
    } else {
        print("Je bent niet veranderd van keuze, dus het was een goede keuze blijkbaar!");
    }
} else {
    print("Weet je het zeker? Je mag nog veranderen.");
    print('<a href="index.php?prev='. $_POST["keuze"].'"> Klik hier</a>');
}