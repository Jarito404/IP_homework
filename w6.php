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

    //opdracht 5
    case 5:
        $cijfers = array(8.0, 1.9, 7.5, 4.3, 5.4, 6.3, 2.3, 5.2, 9.7);
        $voldoendes = array();

        for ($i = 0; $i < count($cijfers); $i++) {
            $cijfer = $cijfers[$i];
            if ($cijfer >= 5.5) {
                $voldoendes[] = $cijfer;
            }
        }

        print("Voldoendes: \n");
        foreach ($voldoendes as $key => $cijfer) {
            print("$cijfer \n");
        }
        break;

    //opdracht 6
    case 6:
        $getallen = array(1, 8, 12, 7, 14, -13, 8, 1, -1, 14, 7);

        print_r($getallen);

        $max = max($getallen);
        print("\nDe max is: " . $max);

        print("\nDe som van de array is: " . array_sum($getallen));

        $posSom = 0;
        foreach($getallen as $getal) {
            if($getal >= 0) {
                $posSom += $getal;
            }
        }
        print("\nDe som van positieve getallen berekend met for-each: $posSom");

        $posNegSom = 0;
        foreach($getallen as $getal) {
            if($getal <= 0) {
                $getal *= -1;
            }
            $posNegSom += $getal;
        }
        print("\nDe som van positieve getallen berekend met for-each: $posNegSom");

        $counter = 0;
        $greatestNum = 0;
        foreach($getallen as $getal) {
            if($getal > $greatestNum) {
                $greatestNum = $getal;
                $counter = 0;//reset de counter weer als een nieuwe max bestaat
            }
            if($getal == $greatestNum) {
                $counter++;//een cijfer even groot als de max is gevonden
            }
        }
        print("\nHet grootste getal is: $greatestNum");
        print("\nDeze is $counter teruggekomen.");
        break;

    //opdracht 7
    case 7:
        $telefoonnummers = array("Mickey Mouse" => "038-4699776",
                                "Guus Geluk" => "0578-121212",
                                "Donald Duck" => "010-2311512");

        foreach($telefoonnummers as $index => $waarde) {
            print("$index $waarde \n");
        }

        print("\nWie krijgt een nieuw nummer?\n");
        $target = trim(fgets(STDIN));

        if(array_key_exists($target, $telefoonnummers)) {
            print("\nWat is het nieuwe nummer?\n");
            $newNumber = trim(fgets(STDIN));

            $telefoonnummers[$target] = $newNumber;
            print("\nNieuwe gegevens:\n");
            foreach($telefoonnummers as $index => $waarde) {
                print("$index $waarde \n");
            }
        } else {
            print("\nDit stripfiguur komt niet in het telefoonboek voor!");
        }
        break;

    //opdracht 8
    case 8:
        //a
        $prijzen = array(
            "cola" => 2.50,
            "koffie" => 2,
            "thee" => 1.75,
            "bier" => 2.25,
            "wijn" => 3.75,
            "water" => 0.50
        );

        //b
        $drink = "";
        $greatestNum = 0;
        foreach($prijzen as $drank => $prijs) {
            if ($prijs > $greatestNum) {
                $drink = $drank;
                $greatestNum = $prijs;
            }
        }
        print("\nDe duurste drank is $drink met een prijs van $greatestNum");

        //c
        print("\nGemiddelde van de array is: " . (array_sum($prijzen) / count($prijzen)));

        //d & e
        $prijzen['thee'] += 0.10;
        $prijzen['water'] *= 2;
        print("\nNieuwe prijs van thee: ".$prijzen['thee']);
        print("\nNieuwe prijs van water: ".$prijzen['water']);

        //f
        $bestelling1 = array("cola","bier","cola","wijn","water","koffie","koffie","koffie");

        //g
        foreach($bestelling1 as $drank) {
            print("\n".$drank);
        }

        //h
        $totalePrijs = 0;
        foreach($bestelling1 as $drank) {
            $totalePrijs += $prijzen[$drank];
        }
        print("\nDe totale prijs is: €$totalePrijs.");

        //i
        $bestelling2 = array("cola" => 2,
                            "bier" => 1,
                            "wijn" => 1,
                            "water" => 1,
                            "koffie" => 3);

        $totalePrijs2 = 0;
        foreach($bestelling2 as $drank => $aantal) {
            print("\nEr is $aantal keer $drank besteld.");
            $totalePrijs2 += $prijzen[$drank] * $aantal;
        }
        print("\nDe prijs dat berekend is met het nieuwe structuur is: €$totalePrijs2.");
        break;

    //als de input anders is dan een nummer van een opdracht
    default:
        print("Bestaat niet");
        break;
}