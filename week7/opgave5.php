<?php
function isSom($getal1, $getal2, $som) {
    return $getal1 + $getal2 == $som;
}

if ( isSom(3, 4, 8) ){
    print("Som!");
} else {
    print("Geen som!");
}