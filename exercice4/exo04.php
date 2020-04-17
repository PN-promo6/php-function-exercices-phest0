<?php

$datas = [1, 2, 3, [1, 2, 3, [1, 2, 3], 4], 4];

function sum($array)
{
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
        $current = $array[$i];
        if (is_array($current)) {
            $sum += sum($current);
        } else {
            $sum += $current;
        }
    }
    return $sum;
}
$result = sum($datas);
echo $result;
