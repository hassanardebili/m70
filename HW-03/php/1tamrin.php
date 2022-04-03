<?php
function rev(&$a){
    for($i=0;$i<count($a);$i++){
        for($j=0;$j<count($a);$j++){
            if($a[$i]<$a[$j]){
                $c=$a[$i];
                $a[$i]=$a[$j];
                $a[$j]=$c;
            }
        }
    }
    return $a;

}
function eve(&$a){
    rev($a);
    for($i=0;$i<count($a);$i++)
        {
            if($a[$i]%2==1){
                $b[$i]=$a[$i];
            }
        }
    return $b;
}
$e=[5,4,8,9,3,15,7,12];
print_r(eve($e)) ;
?>