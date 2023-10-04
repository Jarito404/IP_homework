<?php
print("Welke opdracht wil je runnen? ");//vraagt welke opdracht de gebruiker wilt runnen
$choice = trim(fgets(STDIN));

switch($choice) {//case-switch is best wel similar aan allemaal if-statements
    //opdracht 1
    case 1:
        //a
        $klassenlist = array("tobias", "hasna", "aukje", "fred");
        print_r($klassenlist);

        
        break;

    //als de input anders is dan een nummer van een opdracht
    default:
        print("Bestaat niet");
        break;
}