

<?php
//ba komak agha navid 
$arr = [
    "google.com",
    "Microsoft.com",
    [
        "Google.com" => "cloud",
        "microsoft.com" => "office",
    ],
    [
        "Microsoft.com" => "azure",
    ],
    [
        "Office" => [
            "word", "excel",
        ],
    ],
];


foreach ($arr as $key => &$value) {
    if (is_array($value))
        $value = array_change_key_case($value, CASE_LOWER);
    else
        $value = strtolower($value);
}



print_r($arr);

function flat_array($array)
{
    $flat = array();
    foreach ($array as $value) {
        if (is_array($value))
            $flat = array_merge($flat, flat_array($value));
        else
            $flat[] = $value;
    }
    return $flat;
}

function group_array($array)
{
    $components = flat_array($array);
    
    $result = [];
    foreach ($components as $value) {
        if ($newArray = array_column($array, $value)) {
            $result = array_merge($result, [$value => $newArray]);
        }
    }
    return $result;
}

function unique_array(&$array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $pairValue) {
                
                if ($array[$key][array_search($pairValue, $array)] == $pairValue) {
                    $array[$key][$pairValue] = $array[$pairValue];
                    unset($array[$key][array_search($pairValue, $array[$key])]);
                    unset($array[$pairValue]);
                }
            }
        }
    }
    
    return $array;
}

$arr = group_array($arr);
$arr = unique_array($arr);
print_r($arr);