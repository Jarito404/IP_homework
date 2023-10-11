<?php
function telOp($a, $b) {
    if ($a != $b) {
        return $a + telOp($a+1, $b);
    } else {
        return $a;
    }
}

$resultaat = telOp(5, 10);
print ($resultaat);