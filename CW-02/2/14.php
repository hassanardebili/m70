<?php
$str1 = "football";
$str2 = "footboll";

for ($i = 0; $i < strlen($str1); $i++) {
    if ($str1[$i] != $str2[$i]) {
        echo "First difference between two strings at position $i: \"$str1[$i]\" vs \"$str2[$i]\"";
        break;
    }
}