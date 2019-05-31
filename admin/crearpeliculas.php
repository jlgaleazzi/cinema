<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Crear una pelicula</title>
</head>

<body>
<form id="formapelicula" name="formaPelicula" method="post" action="<?php echo htmlSpecialChars($_SERVER["PHP_SELF"]);?>">
  <label for="titulo">Nombre de Pelicula (titulo) </label>
  <input type="text" name="titulo" id="titulo" /> <br />
  <label for="director">Director </label>
  <input type="text" name="director" id="director" /><br />
  <label for="actores">Actores</label>  
  <input type="text" name="actores" id="actores" /><br />
  <label for="duracion">Duracion en mins</label>
  <input type="text" name="duracion" id="duracion" /><br />
  <label for="idioma">Idioma (ESP/ING/FRA/OTR) </label>
  <input type="text" name="idioma" id="idioma" /><br />
  <label for="thumbnail">Image ThumbNail</label>
  <input type="file" name="thumbnail" id="thumbnail" /><br />
  <input type="submit" />
</form>

<?php require  '../config.php';
//procesar la forma


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$titulo = test_input($_POST["titulo"]);
	$director = test_input($_POST["director"]);
	$actores = test_input($_POST["actores"]);
	$duracion = test_input($_POST["duracion"]);
	$idioma = test_input($_POST["idioma"]);
	$thumbnail = $_POST["thumbnail"];
	
	
	$sql = "INSERT INTO peliculas
	(titulo,director,actores,duracion,idioma,thumbnail) 
	VALUES 
	('". $titulo ."',
	'" . $director . "',
	'" . $actores . "',
	'" . $duracion . "',
	'" . $idioma . "',
	'" . $thumbnail ."')";
 if (isset($sql) && !empty($sql)) {
	//echo "<!--" . $sql . "-->";
	$result = mysql_query($sql)
	or die ("Invalid query: " . mysql_error()); 
 }
 
}

// Desplegar peliculas existentes

?>

</body>
</html>