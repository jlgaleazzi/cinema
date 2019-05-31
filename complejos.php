<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Selecciona un complejo</title>
</head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>
<body>
 <div id="wrapper">
 <!-- inicio navegacion superior -->
   <?php require 'menubar.php' ?>
    
  <!-- fin navegacion superior -->
  <div id="complejos">
    <?php
	
	
	// cargar el documento xml
	$xml = new DOMDocument;
	
	//$xml->load('/Library/Server/Web/Data/Sites/Default/cines/xml/peliculas.xml');
	$xml->load('http://miniserver.local/cines/xml/porComplejo.php');
	
	$xsl = new DOMDocument;
	$xsl ->load('http://miniserver.local/cines/xml/complejos.xsl');
	
	// configurar el transformador xslt
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl);
	
	echo $proc->transformToXML($xml);
    ?>
  </div>
 </div>

</body>
</html>