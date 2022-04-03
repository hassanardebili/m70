<?php
function reverse($n){
    if(strrev($n)==($n)){
        print_r("Symmetrical") ;}
            else { 
                echo "not symmetrical";
            }
    }


$n = "abcddcba";
echo reverse($n);
