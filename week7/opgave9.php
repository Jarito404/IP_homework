<?php
class Afmeting {
    public $breedte;
    public $hoogte;

    function setBreedte($a) {
        $this->breedte = $a * 100;
    }
    function setHoogte($b) {
        $this->hoogte = $b * 100;
    }
    function getBreedte(){
        return $this->breedte;
    }
    function getHoogte() {
        return $this->hoogte;
    }
}

function berekenAantalTegels($muur, $tegel) {
    $breedte = $muur->getBreedte();
    $hoogte = $muur->getHoogte();
    $tegelHoogte = $tegel->getBreedte();
    $tegelBreedte = $tegel->getHoogte();

    return ceil(($breedte * $hoogte) / ($tegelBreedte * $tegelHoogte));
}

function berekenAantalDozen($muur, $tegel, $aantalDoos) {
    return ceil(berekenAantalTegels($muur, $tegel) / $aantalDoos);
}

$tegel = new Afmeting();
$tegel->setBreedte(0.15);
$tegel->setHoogte(0.15);

$muur = new Afmeting();
$muur->setBreedte(5);
$muur->setHoogte(2.6);

$aantalDozen = berekenAantalDozen($muur, $tegel, 20);
print("Voor deze muur moet je " . $aantalDozen . " dozen kopen.");