<?php
function printMail($ontvanger, $dag, $verzonden) {
    if($dag == "")
        $dag = "vandaag";

    if($verzonden)
        print("\nBeste $ontvanger,\nJe pakket is $dag verzonden.\n\nVriendelijke groeten,\nSnelpakket.nl\n");
    else
        print("\nBeste $ontvanger,\nJe pakket wordt $dag verzonden.\n\nVriendelijke groeten,\nSnelpakket.nl\n");
}

printMail("Onno de Vries", "maandag", TRUE);
printMail("Onno de Vries", "", TRUE);
printMail("Ansu Fati", "", FALSE);