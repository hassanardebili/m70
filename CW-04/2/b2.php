<?php

$city = $_GET['city'];
$month = $_GET['month'];
$year = $_GET['year'];
echo "in $city in the month of $month $year , you observed the following weather :";

foreach($_GET['weather'] as $key => $value)
    echo "<li>$value</li>"  ;















 
