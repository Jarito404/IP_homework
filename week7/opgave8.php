<?php
function tekenRondje() {
    print("○");
}

function tekenLijn($lengte) {
    for($i = 0; $i < $lengte; $i++)
        tekenRondje();
    print("\n");
}

function tekenRechthoek($y, $x) {
    for($i = 0; $i < $y; $i++)
        tekenLijn($x);
}

function tekenVierkant($s) {
    tekenRechthoek($s, $s);
}

function tekenDriehoek($l) {
    for($i = 1; $i <= $l; $i++)
        tekenLijn($i);
}

function tekenPiramide($hoogte) {//mooier maken
    $i = 1;
    $j = $hoogte - 1;
    $x = 1;
    while($i <= $hoogte) {
        $whiteSpace = str_repeat(" ", $j);

        print($whiteSpace);
        tekenLijn($x);

        $i++;
        $j--;
        $x += 2;
    }
}

tekenPiramide(5);