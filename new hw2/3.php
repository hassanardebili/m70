<?php
function expandDNA($DNA)
{
    $DNA = strtolower($DNA);
    $numberPattern = "/\d/";
    if (!preg_match($numberPattern, $DNA)) {
        return $DNA;
    }
    $DNA_array = [];
    $pattern = "/(?:[a-z]|\d+)/";
    preg_match_all($pattern, $DNA, $DNA_array);
    $DNA_array = $DNA_array[0];
    for ($i = 1; $i < count($DNA_array); $i++) {
        if (is_numeric($DNA_array[$i])) {
            $DNA_array[$i - 1] = str_repeat($DNA_array[$i - 1], $DNA_array[$i]);
            $DNA_array[$i] = null;
        }
    }
    return implode("", $DNA_array);
}
$input = readline("");
[$personDNA, $virusDNA] = explode(" ", $input);
$virusDNA = expandDNA($virusDNA);
if (str_contains($personDNA, strrev($virusDNA))) {
    echo "Shoma Bimar Nemishavid";
} elseif (str_contains($personDNA, $virusDNA)) {
    echo "Shoma Bimar Hastid";
} else {
    echo "Shoma Salem Hastid";
}
