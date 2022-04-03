<?php

function divisor($n){
    for ($i = 1; $i <= $n; $i++)
        if ($n % $i == 0)
            echo $i," ";
}
$a = 30;
$b = 50;
for($i = $a ; $i < $b ; $i++){
    divisor($i);
    echo "\n" ;
}
echo "the divisors are:\n";


