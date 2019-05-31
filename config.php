<?php
 
 $host="127.0.0.1";
 $user='tecm';
 $pass='cinesSQL';
 $connect = mysql_connect($host,$user,$pass);

 if (!$connect) {
	die ('Could not connect: '.mysql_error()); 
 }
 mysql_select_db('cinesTecMilenio');
 
 
 function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data; 
 }
?>