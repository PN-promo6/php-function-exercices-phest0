<?php

function canWrite($magazine, $message)
{
    $condition = true;
    $lettersDisable = [];
    $lettersEnable = str_split($magazine);
    for ($i = 0; $i < strlen($message); $i++) {
        if (array_search($magazine[$i], $lettersDisable) == true) {
            $condition = false;
        } else {
        }
    }
}
function canWrite2($magazine, $message)
{
    $allMyLetters = array();
    for ($i = 0; $i < strlen($magazine); $i++) {
        $currentLetter = $magazine[$i];
        if (array_key_exists($currentLetter, $allMyLetters) {
            $allMyLetters[$currentLetter] += 1;
        }else{
            $allMyLetters[$currentLetter = 1;
        }
    }
}
