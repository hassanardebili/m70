<?php 
$arr = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
$filterArray = array('c2', 'c4');

foreach ($filterArray as $filterKey) {
    unset($arr[$filterKey]);
}

print_r($arr);