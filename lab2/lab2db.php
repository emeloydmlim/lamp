<?php 
/*
File Name: Lab2.php
Purpose: This page opens a PDO connection to the lab2 database.
Author: Emeloyd Lim
Date: October 9, 2019
*/


 define("DBHOST","localhost"); //Host
 define("DBDB","lab2");        //Database
 define("DBUSER","lamp1user"); //Database User
 define("DBPW","!Lamp12!");    //Database Password

 function dbConnect(){
	 $dsn ="mysql:host=".DBHOST.";dbname=".DBDB.";charset=utf8"; //db connect declaration
	 try{
		 $db_conn = new PDO($dsn,DBUSER,DBPW); //try open pdo connection
		 return $db_conn; // return pdo connection
	 }catch(PDOException $e){ //error handling
		 echo "<p>Error opening database <br/>\n".$e->getMessage()."</p>\n"; //error message
		 exit(1);
	 }
 }


?>
