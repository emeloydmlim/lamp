<?php
/*
File Name: Lab2.php
Purpose: This page reads the sphere database and display the data on the browser webpage.
Author: Emeloyd Lim
Date: October 9, 2019
*/
?>
<html>
<head>
 <meta charset="utf-8">
 <title>Spheres Data Table</title>
</head>
<body>
<h1>LAb 2: Display Spheres Data Values</h1>
<div>
<?php
require_once("./lab2db.php"); //include lab2db.php
$db_conn = dbConnect(); //connect db

//prepare query
$dbQuery = $db_conn->prepare("select radius, surface_area, volume FROM spheres");

//check if no error
if (!$dbQuery){
	echo "Error ".$db_conn->errorCode()."\nMessage ".implode($db_conn->errorInfo())."\n";
	exit(1);
}
//execuge query
$stat = $dbQuery->execute();
if($stat){
	
	if ($dbQuery->rowCount() > 0){
?>
<table border="1" cellpadding="10">
<tr><th>Radius</th><th>Surface Area</th><th>Volume</th></tr>
<?php
		//get data from database and display inside the tables
		while ($row = $dbQuery->fetch(PDO::FETCH_ASSOC)){
			printf("<tr><td>%10.4f</td><td>%10.4f</td><td>%10.4f</td></tr>\n", 
				$row['radius'],
				$row['surface_area'],
				$row['volume']
			);
		}
		echo "</table>\n";
	} else {
		echo "<p>Nothing to output</p>\n";
	}
} else {
   	       echo "<p>Error ".$dbQuery->errorCode()."<br/>\nMessage ".implode($dbQuery->errorInfo())."</p>\n";
		exit(1);
}


$db_conn = NULL; //clear db_conn
?>
</div>
</body>
</html>
