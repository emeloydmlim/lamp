<?php

$var1 = array();
$var1['name'] = array('first'=>"Tom", 'last'=>"Hall");
$var1['phone'] = array('area'=>555, 'prefix'=>555, 'station'=>1212);
$var1['age']= 22;
$var1['school'] = "Fanshawe";

var_dump($var1);;

echo "\n\n";

foreach ($var1 as $key=>$value){
	echo "$key ";
	if (is_array($value)){
		echo "\n";
		foreach ($value as $k=>$v){
			echo "\t $k \t $v \n";
		}
	} else {
		echo "\t $value \n";
	}
}
?>
