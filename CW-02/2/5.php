<?php

$str="2020-01-01 00:00:00";
$pattersn= "/[-\s:]/";
$com= preg_split($pattersn,$str);
echo "<pre>";
print_r($com);
echo "</pre>";