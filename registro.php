<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Registro</title>
</head>
<body>
<form action="registro.php" method="post" name="formaRegistro">
  <label for="nombref">Nombre </label><input name="nombref" type="text"  /><br />
    <label for="apellidof">Apellido</label><input name="apellidof" type="text" /><br />
    <label for="telefonof">Telefono</label><input name="telefonof" type="text" ><br/>
    <label for="emailf">e-mail</label><input name="emailf" type="text" /><br/>
    <label for="direccionf">Direccion</label><input name="direccionf" type="text" /><br/>
    <label for="ciudadf">Ciudad</label><input name="ciudadf" type="text" /><br/>
    <label for="idusuariof">Seleccionar id de Usuario</label><input name="idusuariof" type="text" /><br/>
    <label for="pass1">Password</label><input name="pass1" type="password"  /><br/>
    <label for="pass2">Verificar Password</label>
    <input name="pass2" type="password" />
    <br/>
  <input  type="submit" value="Registrarse" />
</form>

<?php require  'config.php';

// validate form

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$nombre = $_POST['nombref'];
		//echo $nombre;
		$apellido = $_POST["apellidof"];
		//echo $apellido;
		$telefono = $_POST["telefonof"];
		//echo $telefono;
		$email = $_POST["emailf"];
		//echo $email;
		$direccion = $_POST["direccionf"];
		//echo $direccion;
		$ciudad = $_POST["ciudadf"];
		//echo $ciudad;
		$idusuario = $_POST["idusuariof"];
		//echo $idusuario;
		$pwd1 = $_POST["pass1"];
		//echo  $pwd1;
		$pwd2 = $_POST["pass2"];
		//echo $pwd2;
		if ($pwd1 === $pwd2) { 
		
			$sql = "INSERT INTO cinesTecMilenio.cliente"."(nombre, apellido, telefono, email, direccion, ciudad, idUsuario, password)".
			"VALUES ('$nombre', '$apellido', '$telefono', '$email', '$direccion', '$ciudad', '$idusuario', '$pwd1');";
			
			$result = mysql_query($sql);
			
			
			
			if ($result == 1) {
				echo ("Ha quedado registrado"); 
				// enviar email;
				
			}
		
		 } else
		{
			echo "no match";
			
		}
		
		
	}
	

/*	$sql = "INSERT INTO clientes (nombre,apellido,telefono,email,direccion,ciudad,idUsuario,password)
	//VALUES =  
	*/
?>
</body>
</html>