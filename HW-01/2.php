<?php
$a = readline();
$b = readline();
$c = readline();

$x = $a * $a;
$y = $b * $b;
$z = $c * $c;

if ($x + $y == $z || $y + $z == $x || $x + $z == $y)
    echo "yes";

else echo "no";
