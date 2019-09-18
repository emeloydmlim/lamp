<?php
$var1 = array();
$var2 = array(100, 200, 300, 400);
$var6 = array("alpha", "bravo", "charlie", "delta");
$var7 = [ 'a','b','c','d'];

var_dump($var1);
echo "\n\n";
var_dump($var2);
echo "\n\n";
echo "\n\n";
var_dump($var6);
echo "\n\n";
var_dump($var7);

echo $var1[0]."\n";
echo $var2[0]."\n";
echo $var2[1]."\n";


$var2[] = 500;
echo "\n";
var_dump($var2);

array_push($var2, 'd', 'e','f');
echo "\n";
var_dump($var2);
?>
