<?php
function decodeDNA($gen1, $gen2)
{
    if (strlen($gen1) == strlen($gen2)) {
        $adn = "";
        for ($i = 0; $i < strlen($gen1); $i++) {
            $current = $gen1[$i];
            $current2 = $gen2[$i];
            if ($current == $current2) {
                $adn .= '-';
            } else {
                $adn .= '^';
            }
        }
        return $adn;
    } else echo "pls enter 2 strings with similar length";
}
echo decodeDNA("hello", "heeee");
