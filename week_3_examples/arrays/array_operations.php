<?php
$var4 = array(100, 200, 300, 400);
$var5 = array('a'=>"alpha", 'b'=>"bravo", 'c'=>"charlie", 'd'=>"delta");

echo "\n\n";
var_dump($var4);
echo "\n\n";
var_dump($var5);

$var6 = array_merge($var4);
echo "\n\n";
var_dump($var6);


$var6 = array_merge($var4, $var5);
echo "\n\n";
var_dump($var6);

$var6 = array_merge($var4, $var5, $var4);
echo "\n\n";
var_dump($var6);


?>
