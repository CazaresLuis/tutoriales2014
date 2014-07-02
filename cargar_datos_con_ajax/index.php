<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/cargar_datos_con_ajax/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: index.php 2014-03-16 00:57 _CazaresLuis_ ;
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

session_name('tutorialesCazares2014');
session_start();

$root = '../';

// Incluimos la inicialización de la clase twig
include($root.'includes/templateEngine.inc.php');

// Conexión con la base de datos
include($root.'includes/db_connection.inc.php');

// Incluimos las funciones del ejemplo
include('functions.inc.php');

// validar si hay conexión con la base de datos
$listaFunciones = array();

if($errorDbConexion == true){
	$listaFunciones = getListaFunciones($mysqli);
}

// Realizamos el display de la plantilla
$twig->display('cargar_datos_con_ajax/layout.html',array(
	"root"				=> $root,
	"title"				=> "Tutoriales cazaresluis.com",
	"footer"			=> 'cazaresluis.com | luis.f.cazares@gmail.com | Celular: 55 22 71 46 89 | <a href="http://www.cazaresluis.com" target="_blank">Blog</a> | <a href="https://www.youtube.com/user/luisfcazares/" target="_blank">Youtube Channel</a> | <a href="https://twitter.com/cazaresluis" target="_blank">Twitter</a> | <a href="https://plus.google.com/u/0/+LuisFernandoCázaresBulbarela/" target="_blank">Google +</a>',
	"lista_funciones"	=> $listaFunciones
));

?>