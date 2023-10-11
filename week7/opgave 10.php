<?php
function palindroom ($woord) {
    if(strlen($woord) <= 1)//woord is sowieso een palindroom
        return true;

    return $woord == strrev($woord);
}

function zoekSpiegelwoorden($woorden, $spiegel) {
    $result = array();

    foreach($woorden as $woord) {
        if(palindroom($woord) && $spiegel)//woord is een palindroom en user wilt deze vinden
            $result[] = $woord;
        elseif(!palindroom($woord) && !$spiegel) {//woord is geen palindroom en user wilt deze vinden
            $result[] = $woord;
        }
    }

    if(!$spiegel)
        $sub = "juist geen ";
    else
        $sub = "";//voor de string

    print("De volgende woorden zijn ".$sub."spiegelwoorden:\n");
    return $result;
}

$woorden = array("lepel", "vork", "negen", "tien");
$result = zoekSpiegelwoorden($woorden, false);

foreach($result as $woord) {
    print($woord."\n");
}