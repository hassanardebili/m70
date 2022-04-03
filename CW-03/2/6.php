<?php



function isPerfect($n)
{
    $divArr = [];
    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $divArr[] = $i;
        }
    }
    $sum = array_reduce($divArr, fn ($carry, $s) => $carry + $s);
    echo implode(" ", $divArr) . "\n";
    if ($sum == $n) {
        echo "$n is a perfect number";
        return true;
    }
    echo "$n is a not perfect number";
    return false;
}

isPerfect(readline());
