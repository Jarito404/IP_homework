<?php
function printHoofdstuk($titel, $pagina, $aantalPuntjes) {
    $puntjes = str_repeat(".", $aantalPuntjes);
    print(ucfirst(($titel)) . $puntjes ."$pagina\n");
}

function berekenAantalPuntjes($titel) {
    return 50 - strlen($titel);
}

$hoofdstukken = array(
    "Voorwoord" => 5,
    "Inleiding" => 7,
    "Expressionisme" => 9,
    "Surrealisme" => 29,
    "Kubisme" => 53,
    "Dada" => 66,
    "Futurisme" => 90,
    "Nieuwe zakelijkheid" => 99,
    "De Stijl" => 121,
    "Cobra" => 144,
    "Literatuur" => 158);

foreach($hoofdstukken as $titel => $pagina) {
    printHoofdstuk($titel, $pagina, berekenAantalPuntjes($titel));
}