<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/checkboxes_dinamicos/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: functions.inc.ph 2014-07-01 23:00 _CazaresLuis_ ;
 * @descripción: Funciones necesarias para la implementación y ejecución del tutorial
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// extraer de la base de datos la lista de funciones
function getListaRegistros($dbLink){
	$response = array();

	$consulta = "SELECT id_registro,registro_nombre, registro_inv
				FROM ajax_checkboxes
				ORDER BY registro_nombre ASC";

	// Ejecutamos la cosnulta
	$respuesta = $dbLink -> query($consulta);

	if($respuesta -> num_rows != 0){
		while($registro = $respuesta -> fetch_array())
		$response [] = $registro;
	}

	return $response ;
}

?>