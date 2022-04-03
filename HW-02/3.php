<?php

require_once "DNA.php";

$input = readline();
[$personDNA, $virusDNA] = explode(" ", $input);



$virusDNA = expandDNA($virusDNA);

if (str_contains($personDNA, strrev($virusDNA))) {
    echo "Shoma Bimar Nemishavid";
} elseif (str_contains($personDNA, $virusDNA)) {
   
    echo "Shoma Bimar Hastid";
} else {
    echo "Shoma Salem Hastid";
}
