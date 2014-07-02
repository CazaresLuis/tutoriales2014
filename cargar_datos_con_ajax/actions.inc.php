<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/cargar_datos_con_ajax/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: actions.inc.php 2013-03-17 14:01 _CazaresLuis_ ;
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// Directorio Raíz de la app
// Será utilizado en caso de requerir alguna librería
$root = '../';

// Verificamos si existen las variables $_POST
if(isset($_POST) && !empty($_POST)){

	// array de respuestas y regreso en JSON
	$response = array(
		"result" 	=> false,
		"mensaje"	=> "No fue posible ejecutar la petición",
		"datos"		=> ""
	);

	// incluimos la conexión a la base de datos
	include($root . 'includes/db_connection.inc.php');

	// incluimos las funciones del ejemplo
	include('functions.inc.php');

	if($errorDbConexion){

		// verificamos la accion que vamos a ejecutar
		if(isset($_POST['action'])){
			
			// Get Datos de el registro o función
			if($_POST['action'] == 'getFuncion' && $_POST['id_lista'] != ''){
				// mandamos llamar a la función que selecciona los datos de la DB

				if($datosRegFuncion = getFuncion($mysqli,$_POST['id_lista'])){

					$response['result'] = true;
					$response['datos'] = $datosRegFuncion;

				}else{
					$response['mensaje'] = "Registro no encontrado";
				}

			}else{
				$response['mensaje'] = "Acción no definida";
			}

		}else{
			$response['mensaje'] = "Variable Action no Declarada";
		}

	}else{
		$response['mensaje'] = "Error con la conexión a la base de datos";
	}

	// Salida JSON
	echo json_encode($response);

}else{
	echo 'No se puede ejcutar este script';
}
?>