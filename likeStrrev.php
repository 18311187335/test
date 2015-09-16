<?php
$str = "312齐露岩qly";
echo $str;
echo '<hr />';
$len = mb_strlen($str);
$arr = array();
for($i=0;$i<$len;$i++){
    $s = mb_substr($str,$i,1,'utf-8');
    if(!$s){
        continue;
    }
    $arr[$i]=$s;
}
$arrReverse = array_reverse($arr);
$strRev = implode($arrReverse);
echo $strRev;
