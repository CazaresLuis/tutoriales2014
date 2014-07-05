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

// Verificar disponibilidad
function verificaDisponibilidad($dbLink,$id_registro){
	$response = false;

	$consulta = "SELECT registro_inv
				FROM ajax_checkboxes
				WHERE id_registro=%d AND registro_inv > 6
				LIMIT 1";

	$consultaOK = sprintf($consulta,$id_registro);

	// Ejecutamos la cosnulta
	$respuesta = $dbLink -> query($consultaOK);

	if($respuesta -> num_rows != 0){
		$response = $respuesta -> fetch_assoc();
	}

	return $response ;
}

// llenar pool de platicas
function setRegistro($dbLink,$id_registro){
	$response 	= false;

	$consulta 	= "INSERT INTO lista_checkboxes
				SET id_registro=%d";

	$query		= sprintf($consulta,$id_registro);

	// Ejecutamos la cosnulta
	$respuesta = $dbLink -> query($query);

	if($dbLink -> affected_rows == 1){
		$response = true;
	}

	return $response;
}

// Actualizar inventario
function setInventario($dbLink, $accion, $id_registro, $inventario = 0){
	
	$response = false;

	// Afectamos el inventario
	if($inventario != 0){
		switch ($accion) {
			case 'sumar':
				$inventario++;
			break;
			case 'restar':
				$inventario--;
			break;
		}

		// Creamos el query
		$consulta 	= "UPDATE ajax_checkboxes
					  SET registro_inv=%d
					  WHERE id_registro=%d
					  LIMIT 1";

		$query		= sprintf($consulta,$inventario,$id_registro);

		// Ejecutamos la cosnulta
		$respuesta = $dbLink -> query($query);

		if($dbLink -> affected_rows == 1){
			$response = true;
		}
		
	}

	return $response;
}

// Verificar bloqueo de plticas
function verificaRegistro($dbLink,$id_registro){
	$response = false;

	$consulta 	= "SELECT id_registro
				   FROM lista_checkboxes
				   WHERE id_registro=%d
				   LIMIT 1";

	$query		= sprintf($consulta,$id_registro);

	// Ejecutamos la consulta
	$respuesta = $dbLink -> query($query);

	if($respuesta -> num_rows != 0){
		$response = true;
	}

	return $response ;
}

// Eliminar registro
function eliminaRegistro($dbLink,$id_registro){
	$response	=	false;

	$consulta 	= "DELETE FROM lista_checkboxes
				   WHERE id_registro=%d
				   LIMIT 1";

	$query		= sprintf($consulta,$id_registro);

	// Ejecutamos la consulta
	$respuesta = $dbLink -> query($query);

	if($dbLink -> affected_rows != 0){
		$response = true;
	}

	return $response ;
}

?>