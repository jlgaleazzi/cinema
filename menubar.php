<?php
 $menu = array(
'peliculas' =>array('text'=>'Peliculas', 'url'=>'?p=peliculas'),
'cines' =>array('text'=>'Cines','url'=>'?p=cines')
);


class CNavigation {
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
		case 'peliculas' :
			header("Location: index.php");
		break;
		case 'cines':
			header("Location: complejos.php");
		break;	
	}
}

echo CNavigation::GenerateMenu($menu);
?>