<?php 
function strlo(&$a){
    $b=[  "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
    "v", "w", "x", "y", "z"];
    $c=[ "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
    "V", "W", "X", "Y", "Z",];
    for($i=0;$i<strlen($a);$i++){
        for($j=0;$j<count($c);$j++){
            if($a[$i]==$c[$j]){
                $a[$i]=$b[$j];
            }
        }
    }
    return $a;
}
function strup(&$a){
    $b=[  "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
    "v", "w", "x", "y", "z"];
    $c=[ "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
    "V", "W", "X", "Y", "Z",];
    for($i=0;$i<strlen($a);$i++){
        for($j=0;$j<count($b);$j++){
            if($a[$i]==$b[$j]){
                $a[$i]=$c[$j];
            }
        }
    }
    return $a;
}
$h="kHaSTe NABaSHiD";
echo strlo($h);
echo "<br>";
echo strup($h);