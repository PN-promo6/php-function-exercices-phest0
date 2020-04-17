<?php
$datas = [3, 4, 5, 6, 3];
function customSort(&$unsortedArray)
{
    do {
        $permutation = false;
        for ($i = 0; $i < count($unsortedArray) - 1; $i++) {
            $currentElement = $unsortedArray[$i];
            $nextElement = $unsortedArray[$i + 1];
            if ($nextElement > $currentElement) {
                $unsortedArray[$i] = $nextElement;
                $unsortedArray[$i + 1] = $currentElement;
                $permutation = true;
            }
        }
    } while ($permutation);
}
customSort($datas);
var_dump($datas);
