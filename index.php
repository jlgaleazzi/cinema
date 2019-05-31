<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Cines Tecmilenio - Busca por pelicula</title>
</head>
<link href="css/main.css" rel="stylesheet" type="text/css"/>

<body>
<div id="wrapper">
<!-- inicio navegacion superior -->
	<div class="member-nav">
    <!--<ul>
       <li><a href="#">Registrarse</a></li>
       <li><a href="#">Login</a></li>
     </ul> -->
     <?php require 'loginMenu.php'?>
    </div>
  <!-- <nav>
    <ul>
       <li><a href="#">Peliculas</a></li>
       <li><a href="#">Cines</a></li>
      
      </ul>
    </nav>
    -->
    <?php require 'menubar.php' ?>
  <!-- fin navegacion superior -->
    
  <!-- inicio area promocion pelicula -->
    
    <div id="promoPelicula" class="banner">
    
    </div>
    <div id="contenido">
    <?php
	
	
	// cargar el documento xml
	$xml = new DOMDocument;
	
	//$xml->load('/Library/Server/Web/Data/Sites/Default/cines/xml/peliculas.xml');
	$xml->load('http://miniserver.local/cines/xml/peliculas.php');
	
	$xsl = new DOMDocument;
	$xsl ->load('http://miniserver.local/cines/xml/peliculas.xsl');
	
	// configurar el transformador xslt
	$proc = new XSLTProcessor;
	$proc->importStyleSheet($xsl);
	
	echo $proc->transformToXML($xml);
    ?>
    </div>
    
</div>
<!-- fin area de promcion -->
       
</body>
</html>
