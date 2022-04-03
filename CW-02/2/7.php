<?php


$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

echo "Values are in lower case.\n";
foreach ($Color as $key => $value) {
    $Color[$key] = strtoupper($value);
}
print_r($Color) . PHP_EOL;

echo "Values are in upper case.\n";
foreach ($Color as $key => $value) {
    $Color[$key] = strtolower($value);
}
print_r($Color);