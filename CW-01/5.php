<?php
$a = readline();
$operator = readline();
$b = readline();

if ($operator == '+') {
    echo $a + $b;
} else if ($operator == '*') {
    echo $a * $b;
} else {
    echo '';
}