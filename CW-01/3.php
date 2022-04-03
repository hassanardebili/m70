<?php
$string = readline();

if ($string == 'shanbe' || $string == 'doshanbe' || $string == 'chaharshanbe') {
    echo "perspolis";
} else if ($string == 'yekshanbe' || $string == 'seshanbe' || $string == 'panjshanbe') {
    echo "bahman";
} else if ($string == 'jome') {
    echo "tatil";
} else {
    echo "ha?";
}