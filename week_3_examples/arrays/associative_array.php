<?php
$var3 = array('a'=>100, 'b'=>200, 'c'=>300, 'd'=>400);
$var4 = array('a'=>100, '2'=>200, 'c'=>300, '4'=>400);
$var5 = array('a'=>"alpha", 'b'=>"bravo", 'c'=>"charlie", 'd'=>"delta");
$var8 = ['a'=>"alpha", 'b'=>"bravo", 'c'=>"charlie", 'd'=>"delta"];

echo "\n\n";
var_dump($var3);
echo "\n\n";
var_dump($var4);
echo "\n\n";
var_dump($var5);
echo "\n\n";
var_dump($var8);

echo $var8['a']."\n";
echo $var8['b']."\n";


$var5['g'] = "golf";
$var5['hotel'] = 'h';
$var5[3] = 'three';
$var5['f'] = "foxtrot";
$var5['z'] = 99;

echo "\n";
var_dump($var5);

?>
