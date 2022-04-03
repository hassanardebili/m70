<?php
$n = (int) strrev(readline());
$len = strlen($n);
$temp = 0;
for ($i = 0; $i < $len; $i++) {
    $temp = $n % 10;
    $n /= 10;
    echo "$temp: ";
    for ($j = 0; $j < $temp; $j++) {
        echo $temp;
    }
    echo "\n";
}