<?php

$str = "Sample ple please sade bashe";
$str = str_replace(" ", "", $str);
$pattern = "/(.+)\\1+/";
$str = preg_replace($pattern, "$1", $str);

echo $str;

