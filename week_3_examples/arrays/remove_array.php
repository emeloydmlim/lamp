<?php
$var5 = array('a'=>"alpha", 'b'=>"bravo", 'c'=>"charlie", 'd'=>"delta");


$var5['g'] = "golf";
$var5['hotel'] = 'h';
$var5[3] = 'three';
$var5['f'] = "foxtrot";
$var5['z'] = 99;

var_dump($var5);

echo "\n";
echo "Removing first item from \$var5, its value is ".array_shift($var5)."\n";
echo "\n";
var_dump($var5);

echo "\n";
echo "Removing last item from \$var5, its value is ".array_pop($var5)."\n";
echo "\n";
var_dump($var5);

echo "\n";
echo "Removing item with key 'd' with value ".$var5['d']."\n";
unset($var5['d']);
echo "\n";
var_dump($var5);

echo "\n";
echo "Removing value with key 'g', but not the key THIS IS DANGEROUS.\n";
$var5['g'] = NULL;
echo "\n";
var_dump($var5);

echo "\n";
echo "Removing entire array\n";
unset($var5);
echo "\n";
if (isset($var5)){
	var_dump($var5);
} else {
	echo '$var5 does not exist'."\n";
}

?>
