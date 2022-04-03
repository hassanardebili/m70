<?php
$a = "Fundamental To Programming";
$c="f";
$r=0;
$a = strtolower($a);
$a = str_replace(" ", "", $a);
$b = array_count_values(str_split($a));

foreach ($b as $c => $r) {
    echo $c;
}
echo " ";
foreach ($b as $c => $r) {
    echo $c . $r;
}