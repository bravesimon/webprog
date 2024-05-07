<?php
include('./config/menu.php');

$keres = $pages['/'];

if (isset($_GET['oldal'])) {
	if (isset($pages[$_GET['oldal']]) && file_exists("./templates/pages/{$pages[$_GET['oldal']]['fajl']}.tpl.php")) {
		$keres = $pages[$_GET['oldal']];
	}
	else { 
		$keres = $hiba_oldal;
		header("HTTP/1.0 404 Not Found");
	}
}

include('./templates/index.tpl.php'); 

?>