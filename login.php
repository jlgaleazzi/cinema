<?php
session_start;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
</head>

<body>
 
<?php require  'config.php';





$loginForm =  "<div id='login'>".
					"<form action='login.php' method='post' name='loginForm'>".
						"<label>id de Usuario</label> <input type='text' name='idUsuario'/><br />".
						"<label>Password</label><input type='password' name='pass'/><br/>".
						"<input type='submit' value='Login'/>".
					"</form>".
				"</div>";
				


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$login = $_POST["idUsuario"];
	$password = $_POST["pass"];
	
	$query = mysql_query("SELECT * FROM cliente where idUsuario = '$login' AND password = '$password'") or die(mysql_error());
	
	
	
	
	$row = mysql_fetch_array($query); 
	
	if(!empty($row['idUsuario']) AND !empty($row['password'])) 
		{ 
			session_start();
			$_SESSION['idUsuario'] = $row['password'];
		 	//echo "Hola :".$row['nombre'];
			$_SESSION['Nombre'] = $row['nombre']." ".$row['apellido'];
			header("Location: index.php");
		}
	  else 
	  { 
	  	echo  $loginForm. "<br> id de usuario o contraseña Invalida";
		
	  }

   }
    else
   {
	 echo $loginForm;  
   }

?>
</body>
</html>