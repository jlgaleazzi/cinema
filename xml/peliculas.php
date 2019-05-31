<?php require  '../config.php';
require '../xmlutilities.php';
/* Sql query */
$result = mysql_query("SELECT * from peliculas");
 

header('Content-type: application/xml');
echo sqlToXml($result, "peliculas", "pelicula");





?>
