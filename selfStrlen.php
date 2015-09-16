<?php
$str = '312齐露岩qly';
$strlen = strlen($str);
$mb_strlen = mb_strlen($str);
echo "strlen".$strlen."mb_strlen".$mb_strlen;
$arr = array();
for($i=0;$i<$strlen;$i++){
    $s = mb_substr($str, $i,1,'utf-8');
    if(!$s){
        continue;
    }
    array_push($arr,$s);
}
//var_dump($arr);
$count = count($arr);
echo $count;
