<?php
function SumAll($n)
{

    if ($n > 0) {
        $sum = 0;
        for ($i = $n; $n >= 1; $n--) {
            $sum += $n;
        }
        return $sum;
    } else {
        echo "desole " . $n . " is not valid";
    }
}
$test = SumAll(11);
echo $test . "\n";

function testSum($number)
{
    return (1 + $number) * ($number / 2);
}

echo testSum(11);
