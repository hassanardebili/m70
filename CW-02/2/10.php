<?php
$arr = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$filterValue = "Red";
$newArray = array_filter($arr, fn ($var) => $var != $filterValue);
print_r($newArray);
$filterArray = array('Red', 'Green');
$filterFunc = function ($var) use ($filterArray) {
    foreach ($filterArray as $value) {
        if ($value == $var) {
            return false;
        }
    }
    return true;
};

$newArray = array_filter($arr, $filterFunc);
print_r($newArray);