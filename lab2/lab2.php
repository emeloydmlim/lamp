<?php
/*
File Name: Lab2.php
Purpose: Generate Random radius and Calculate the volume and surface area. Then insert it into the database. 
Author: Emeloyd Lim
Date: October 9, 2019
*/

declare(strict_types=1); //declare strict mode
require_once ("./lab2db.php"); //include lab2db.php
$db_conn =  dbConnect(); //initialize db connect

//function generate random spheres
function randomSpheres(int $param): array{
        $radii = array();
	for($i=0; $i < $param; $i++){
		$spheres = rand(1,20);
		 
		

   
		array_push($radii,$spheres);
	}
	
        return $radii;
}

//function insert records to database
function insertRecord($dbc,$rad, $surf, $vol){
	
	$dbquery = $dbc->prepare('INSERT INTO spheres (radius,surface_area,volume)  values (:rad, :surf,:vol)');
	if(!$dbquery){
		echo "Error ". $dbc->errorCode(). " \nMessage ".implode($dbc->errorInfo())."\n";
		exit(1);
	}
	$data = array(":rad" => $rad, ":surf" => $surf, ":vol" => $vol);
	
	$stat = $dbquery->execute($data);
	
	if(!$stat){
		echo "Error ".$dbquery->errorCode()."\nMessage ".implode($dbc->errorInfo())."\n";
	}
}



// generate 5 random spheres
$sphere = randomSpheres(5);

// Loop sphere and calculate the volume and surface
foreach($sphere as $sval){

$volume = (4 /3 ) * pi() * pow($sval,3);
$surface = 4 * pi() * pow($sval, 2);

$check = insertRecord($db_conn,$sval, $surface, $volume);

}

// clear $db_conn
$db_conn = NULL;


?>
