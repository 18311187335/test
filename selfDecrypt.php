<?php
//$randStr可以设置多种  不同的randStr对应不同的加密方式
//str 为需要加密的参数

    $standardStr ="abcdefghijklmnopqrstuvwxyz0123456789";
    $randStr =    "fijshxmelvdgkuytracbwpoqzn6543891027";
    $str = 'apache3';
    $len =strlen($str);
    $arr = array();
    for($i=0;$i<$len;$i++){
       array_push($arr,strpos($standardStr,$str[$i]));
    }
    $res = null;
    foreach($arr as $k=>$v){
       $res.=$randStr[$v];
    }
    echo $res;

