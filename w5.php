<?php
print("Welke opdracht wil je runnen? ");
$choice = trim(fgets(STDIN));

switch($choice) {
    case 1:
        //opdracht a - c
        echo "Geef x- en y-metingen voor rechthoek:\n";
        echo "x: ";
        $breadthRect = (int) trim(fgets(STDIN));
        echo "y: ";
        $lengthRect = (int) trim(fgets(STDIN));

        print("Met for-loop\n");
        for($x = 0; $x < $lengthRect; $x++) {
            for($y = 0; $y < $breadthRect; $y++) {
                print("*");
            }
            print("\n");
        }
        print("\nMet while-loop\n");
        $i = 0;
        while($i < $lengthRect) {
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