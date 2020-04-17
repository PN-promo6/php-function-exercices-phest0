<?php
function testToWrite($magazine, $message)
{
    for ($i = 0; $i < strlen($message); $i++) {
        $currentLetter = $message[$i];
        if ($currentLetter == ' ') {
            continue;
        }
        $letterExist = false;
        for ($j = 0; $j < strlen($magazine); $j++) {
            $currentLetter2 = $magazine[$j];
            if ($currentLetter == $currentLetter2) {
                $letterExist = true;
                $magazine[$j] = " ";
                break;
            }
        }
        if ($letterExist == false) {
            return false;
        }
    }
    return true;
}
$magazine = "bonjour aujourd'hui ik faut beau";
$lettre = "pas content pas content";

if (testToWrite($magazine, $lettre)) {
    echo "you can write the letter";
} else {
    echo "you can't write the letter";
}
