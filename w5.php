<?php
print("Welke opdracht wil je runnen? ");//vraagt welke opdracht de gebruiker wilt runnen
$choice = trim(fgets(STDIN));

switch($choice) {//case-switch is best wel similar aan allemaal if-statements
    //opdracht 1
    case 1:
        //opdracht a - c
        echo "Geef x- en y-metingen voor rechthoek:\n";
        echo "x: ";
        $breadthRect = (int) trim(fgets(STDIN));//het aantal rijen
        echo "y: ";
        $lengthRect = (int) trim(fgets(STDIN));//het aantal kolommen

        print("Met for-loop\n");
        for($x = 0; $x < $lengthRect; $x++) {//per rij
            for($y = 0; $y < $breadthRect; $y++) {
                print("*");
            }
            print("\n");//aan het eind van de rij
        }
        print("\nMet while-loop\n");
        $i = 0;
        while($i < $lengthRect) {//zelfde principe, maar dan met een while-loop en zonder break
            $j = 0;
            while($j < $breadthRect) {
                print("*");
                $j++;
            }
            print("\n");
            $i++;
        }

        //opdracht d - g
        echo "\nTeken een driehoek van K naar L sterretjes.\n";
        echo "K: ";
        $K = (int) trim(fgets(STDIN));
        echo "L: ";
        $L = (int) trim(fgets(STDIN));

        $star = str_repeat("*", $K);
        if($K > $L) {//als K groter, dan descending
            while($K > ($L - 1)) {
                print($star);
                $star = substr($star, 0, -1);
                $K--;
                print("\n");
            }
        } else {//K is kleiner, dus ascending
            while($K < ($L + 1)) {
                print($star);
                $star .= "*";
                $K++;
                print("\n");
            }
        }

        //h
        echo "\nGeef de breedte van de pyramide: ";
        $breadthPyr = (int) fgets(STDIN);

        $m = 0;
        $star = "*";
        while($m < $breadthPyr) {//eerst ascenden
            print($star);
            $star .= "*";
            $m++;
            print("\n");
        }
        $star = substr($star, 0, -1);//verwijder de laatste toevoeging van vorige while-loop
        while(strlen($star) > 1) {//nu descenden
            $star = substr($star, 0, -1);
            print($star);
            $m--;
            print("\n");
        }

        //i - l
        print("\nOpdrachten i tottermet l\n");
        for($i = 1; $i <= 100; $i++) {//loopt van 1-100
            print($i . " ");
        }
        print("\n");
        for($j = 100; $j >= 1; $j--) {//loopt van 100-1
            print($j . " ");
        }
        print("\n");
        for($k = 1; $k <= 100; $k++) {
            if($k != 50 && $k != 54) {//als $k 50 of 54 is, dan print hij niks
                print($k . " ");
            }
        }
        print("\n");
        for($l = 2; $l <= 100; $l++) {
            if($l % 2 == 0) {//% 2 wordt gebruikt om aan te duiden of het even is
                print($l . " ");
            }
        }

        //m & n
        print("\n\nOpdrachten m en n");
        $som = 0;
        for($m = 1; $m <= 100; $m++) {
            $som += $m;//letterlijk optellen
        }
        print("\nDe som van 1 - 100 is: " . $som);

        $product = 1;
        for($n = 1; $n <= 100; $n++) {
            $product *= $n;//is gewoon steeds maal $n
        }
        print("\nHet product van 1 - 100 is: " . $product);

        //o
        print("\n\nOpdracht o\n");
        for($o = 0; $o < 20; $o++) {
            print(rand(0, 100) . " ");
        }

        //p
        print("\n\nOpdracht p\n");
        $randNumbers = array();
        for($p = 0; $p < 20; $p++) {
            $newValue = rand(0,100);
            print($newValue . " ");
            $randNumbers[] = $newValue;//stopt alle nummers in een array
        }
        print("\nDe som van de pseudo willekeurige nummers is: " . array_sum($randNumbers) . "\n");//met de handige functie wordt som berekend

        //q
        print("\nOpdracht q\n");
        $maxValue = 0;
        for($q = 0; $q < 20; $q++) {
            $newValue = rand(1,100);
            print ($newValue . " ");
            if($newValue > $maxValue) {//als de nieuwe value groter is dan de huidige max, dan wordt de max aangepast
                $maxValue = $newValue;
            }
        }
        print("\nDe grootste waarde is: " . $maxValue);

        //r is letterlijk hetzelfde als a-c. ga ik niet doen
        break;
    case 2:
        //2
        break;
    case 3:
        //3
        break;
    case 4:
        //4
        break;
    default:
        print("Bestaat niet");
        break;
}