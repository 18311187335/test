<?php
$ar = array( 
    "auth" => array( 
        "user" => "customer",
        "password" => "password",
        "context" => "4",
    ),
    "owner" => array( 
        "user" => "customer2",
        "context" => "4",
    ),
    "language" => "en",
    "task" => array( 
        "code" => "0130",
    ), 
);
$xml = simplexml_load_string('<request />');
create($ar, $xml);
echo $xml->saveXML();
 
function create($ar, $xml) {
    foreach($ar as $k=>$v) {
        if(is_array($v)) {
            $x = $xml->addChild($k);
            create($v, $x);
        }else $xml->addChild($k, $v);
    }
}