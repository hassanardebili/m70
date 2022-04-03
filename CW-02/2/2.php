<?php
$str = "Life is beautiful depending on how you look at life";
$pattern = "/life/i";
echo preg_match_all($pattern, $str);
