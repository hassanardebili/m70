<?php


$input = "Fundamental To Programming";


$input = strtolower($input);

$input = str_replace(" ", "", $input);

$count_array = array_count_values(str_split($input));


foreach ($count_array as $char => $repeat) {
    echo $char;
}
echo " ";

foreach ($count_array as $char => $repeat) {
    echo $char . $repeat;
}
