<?php

$window_name = array(
    'cim' => 'Auto szerviz Kft.',
);

$header = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Auto szerviz honlap',
	'motto' => ''
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Auto szerviz Kft.'
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$pages = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galeria', 'menun' => array(1,1)),
	'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Uzenetek', 'menun' => array(0,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(0,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);
 
?>