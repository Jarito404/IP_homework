<?php
print("Welke opdracht wil je runnen? ");//vraagt welke opdracht de gebruiker wilt runnen
$choice = trim(fgets(STDIN));

switch($choice) {//case-switch is best wel similar aan allemaal if-statements
    //opdracht 1
    case 1:
        //a - c
        $klassenlist = array("tobias", "hasna", "aukje", "fred");
        print_r($klassenlist);

        print("\n");
        for($b = 0; $b < count($klassenlist); $b++) {//print alle elementen uit in de array
            print($b . ": " . $klassenlist[$b] . "\n");
        }

        sort($klassenlist);
        print("\n");

        for($b = 0; $b < count($klassenlist); $b++) {
            print($b . ": " . $klassenlist[$b] . "\n");
        }
        break;

    //als de input anders is dan een nummer van een opdracht
    default:
        print("Bestaat niet");
        break;
}