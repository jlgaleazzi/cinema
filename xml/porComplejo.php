<?php require  '../config.php';
require '../xmlutilities.php';
/* Sql query */
$result = mysql_query("SELECT * from Complejo");
 
/* If you want to process the returned xml rather than send it
    to the browser, remove the below line.
*/
header('Content-type: application/xml');
echo sqlToXml($result, "complejos", "complejo");



?>
