<?php

if (isset($_POST)){
    extract($_POST);
    $url = 'contact.json';
    $contact = file_get_contents($url);
    $myarray = json_decode($contact,true);
    $myarray[] = [
        "firstname"=>$fname,
        "lastname"=>$lname,
        "phone"=>$tel,
        "gender"=>$gender,
        "detail"=>$detail
    ];
    var_dump($myarray);
    $myarray = json_encode($myarray,JSON_PRETTY_PRINT);
    file_put_contents($url,$myarray);
    
}