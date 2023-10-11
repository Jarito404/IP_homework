<?php
function citaat ($citaat) {
    return "\n--- $citaat ---";
}

function citaat2 ($auteur, $citaat) {
    return "\n--- $auteur: $citaat ---";
}

print(citaat("Veni vidi vici"));
print(citaat2("Julius Caesar",  "Et tu, Brute "));