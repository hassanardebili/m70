<?php

$arr = [];

function add($key, $value)
{
    global $arr;
    $arr = array_merge($arr, [$key => $value]);
}

function get($key)
{
    global $arr;
    return $arr[$key] ?? null;
}

function remove($key)
{
    global $arr;
    unset($arr[$key]);
}

add('foo', 'bar');


var_dump($arr);
