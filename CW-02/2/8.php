<?php 
$str = array ("abcd","abc","de","hjjj","g","wer");
$lengths = array_map('strlen', $str);

echo "The shortest is " . min($lengths) .
     ". The longest is " . max($lengths);
