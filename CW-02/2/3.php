<?php

$words = "The quick brown fox";
$text = preg_replace('/\W\w+\s*(\W*)$/', '$1', $words);
