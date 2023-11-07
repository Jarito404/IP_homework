<?php
$minimum = 3;
$maximum = 4;
$aantalPersonen = 5;

if($aantalPersonen >= $minimum && $aantalPersonen <= $maximum) {
    print($aantalPersonen . " personen kunnen samen in een groep");
} else {
    print($aantalPersonen . " personen komt niet goed uit.");
}