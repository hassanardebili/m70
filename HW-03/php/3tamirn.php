<?php
function changes(&$text,$asli,$jaygozin){
    $arrytext=explode(" ",$text);
    for($i=0;$i<count($arrytext);$i++){
        if($arrytext[$i]==$asli){
            $arrytext[$i]=$jaygozin;
        }
    }
    $text=implode(" ",$arrytext);
    return $text;
}
$str="salam panjshanbe maktab kelas darad, jome maktab kelas darad";
 echo changes($str,"maktab","ali");