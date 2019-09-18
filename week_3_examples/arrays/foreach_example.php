<?php
$var3 = array('a'=>100, 'b'=>200, 'c'=>300, 'd'=>400);

foreach($var3 as $key=>$value){
	echo "$key \t $value \n";
}
echo "\n\n";

$total = 0;
foreach ($var3 as $value){
	echo "\t $value \n";
	$total += $value;
}
echo "Total = $total \n";

?>
