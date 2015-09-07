<?php
$xml = (array)simplexml_load_file("test.xml");
print_r($xml);exit;
echo $xml->getName() . "<br />";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br />";
  }
?>
