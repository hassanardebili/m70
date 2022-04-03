<?php
$n = readline();

for ($i = 1; $i <= $n; $i += 2) {
    echo str_repeat(" ", ($n - $i) / 2)
        . str_repeat("*", $i)
        . str_repeat(" ", $n - $i)
        . str_repeat("*", $i)
        . "\n";
}


for ($i = $n - 2; $i >= 1; $i -= 2) {
    echo str_repeat(" ", ($n - $i) / 2)
        . str_repeat("*", $i)
        . str_repeat(" ", $n - $i)
        . str_repeat("*", $i)
        . "\n";}