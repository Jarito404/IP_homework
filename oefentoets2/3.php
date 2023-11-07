<?php
$seizoen = "lente"; // kies uit: zomer, lente, winter, herfst
$temperatuur = 19;
$neerslag = FALSE;

if ($seizoen == "zomer" || ($seizoen == "lente" && !$neerslag && $temperatuur > 18)) {
    print ("korte broek");
} else {
    print("lange broek");
}
