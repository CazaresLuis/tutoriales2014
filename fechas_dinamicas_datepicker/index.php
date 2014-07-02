<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/fechas_dinamicas_datepicker/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: index.php 2014-07-01 23:00 _CazaresLuis_ ;
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

session_name('tutorialesCazares2014');
session_start();

$root = '../';

// Incluimos la inicialización de la clase twig
include($root.'includes/templateEngine.inc.php');

// creamos fechas inicial y final
$fechaInicio	= new dateTime('NOW');
$fechaFinal		= new dateTime('NOW +1 days');

// Realizamos el display de la plantilla
$twig->display('fechas_dinamicas_datepicker/layout.html',array(
	"root"				=> $root,
	"fechaInicio"		=> $fechaInicio->format('d-m-Y'),
	"fechaFinal"		=> $fechaFinal->format('d-m-Y'),
	"title"				=> "Tutoriales cazaresluis.com",
	"footer"			=> 'cazaresluis.com | luis.f.cazares@gmail.com | Celular: 55 22 71 46 89 | <a href="http://www.cazaresluis.com" target="_blank">Blog</a> | <a href="https://www.youtube.com/user/luisfcazares/" target="_blank">Youtube Channel</a> | <a href="https://twitter.com/cazaresluis" target="_blank">Twitter</a> | <a href="https://plus.google.com/u/0/+LuisFernandoCázaresBulbarela/" target="_blank">Google +</a>'
));

?>