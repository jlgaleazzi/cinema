<?php
session_start();
 $menu = array(
'peliculas' =>array('text'=>'Login', 'url'=>'?p=login'),
'cines' =>array('text'=>'Registrarse','url'=>'?p=register')
);


class cLoginMenu {
	public static function GenerateMenu($items) {
		$html = "<nav>\n";
		foreach($items as $item) {
			$html .= "<a href='{$item[url]}'>{$item['text']}</a>\n";
		}
		$html .= "</nav>\n";
		return $html;
	}
}

$mSelection = htmlspecialchars($_GET["p"]);

if ($mSelection) {
	switch ($mSelection) {
		case 'login' :
			header("Location: login.php");
		break;
		case 'register':
			header("Location: registro.php");
		break;
		case 'logout':
			header("Location: index.php");
			// remove all session variables
			session_unset(); 
			// destroy the session 
			session_destroy();
		break;	
	}
}
if 	($_SESSION["Nombre"] != "") { 
		echo "<ul><li><div id='name'>". $_SESSION["Nombre"] ."</div></li>"."<li><div id='logout'><a href='?p=logout'>Salir</div></li></ul>";
		
} else { 
		echo cLoginMenu::GenerateMenu($menu); 
		}
?>