<?php
function printCitaat ($citaat) {
    print("\n--- $citaat ---");
}

function printCitaat2 ($auteur, $citaat) {
    print("\n--- $auteur: $citaat ---");
}

printCitaat("To be or not to be");
printCitaat2("Julius Caeser", "Alea iacta est");