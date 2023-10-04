<?php
print("Welke opdracht wil je runnen? ");//vraagt welke opdracht de gebruiker wilt runnen
$choice = trim(fgets(STDIN));

switch($choice) {//case-switch is best wel similar aan allemaal if-statements
    //opdracht 1
    case 1:
        //a
        $klassenlist = array("tobias", "hasna", "aukje", "fred");
        print_r($klassenlist);

        //b
        print("\n");
        for($b = 0; $b < count($klassenlist); $b++) {//print alle elementen uit in de array
            print($b . ": " . $klassenlist[$b] . "\n");
        }

        //c
        sort($klassenlist);
        print("\n");

        for($b = 0; $b < count($klassenlist); $b++) {
            print($b . ": " . $klassenlist[$b] . "\n");
        }
        break;

    //opdracht 2
    case 2:
        $playlist = array();
        $aantalNummers = 3;

        for($h2 = 0; $h2 < $aantalNummers; $h2++) {
            print ("nummer ". ($h2 + 1) . ": \n");
            $playlist[$h2] = trim(fgets(STDIN));
        }

        print_r($playlist);
        break;

    //opdracht 3
    case 3:
        $rondeTijd = array(5,5,6,6,7);

        for($h3 = 0; $h3 < count($rondeTijd); $h3++) {
            print ("ronde ". ($h3 + 1) . ": " . $rondeTijd[$h3] . " minuten\n");
        }

        $aantalRonden = count($rondeTijd);
        print("aantal ronden: " . $aantalRonden . "\n");

        print("totale tijd: " . array_sum($rondeTijd) . " minuten\n");
        print("snelste ronde: " . min($rondeTijd) . " minuten\n");
        print("langzaamste ronde: " . max($rondeTijd) . " minuten\n");
        break;

    //opdracht 4
    case 4:
        $klassenlijst = array("tobias", "hasna", "aukje", "fred", "sep", "koen", "wahed", "anna", "jackie", "rashida", "winston", "sammy", "manon", "ben", "karim", "bart", "lisa");

        $klassenlijst[] = "tom";//om aan het einde van een array wat in te voegen, zet je niks tussen de haken. voor opdracht c

        foreach($klassenlijst as $nr => $naam) {
            print(($nr + 1) . " " . ucfirst($naam) . "\n");//ucfirst() functie toegepast voor opdracht b. ($nr + 1) toegevoegd voor opdracht d
    }

        break;
    //als de input anders is dan een nummer van een opdracht
    default:
        print("Bestaat niet");
        break;
}