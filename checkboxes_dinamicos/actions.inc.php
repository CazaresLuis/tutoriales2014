<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/checkboxes_dinamicos/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: actions.inc.php 2014-07-01 23:18 _CazaresLuis_ ;
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
		if(isset($_POST['action']) && isset($_POST['id_registro'])){
			// validar accion
			if($_POST['action'] == 'setBloqueo'){

				if($_POST['inventario'] == 'ok'){

					$disponibilidad = verificaDisponibilidad($mysqli,$_POST['id_registro']);

					$response = array(
						"result" 	=> true,
						"mensaje"	=> "Verificación",
						"datos"		=> $disponibilidad
					);

				}else{
					$response = array(
						"result" 	=> true,
						"mensaje"	=> "Verificación",
						"datos"		=> "Se eliminará el registro e incrementará el inventario en 1"
					);
				}

			}else{
				$response['mensaje'] = "No se puede ejecutar la acción";
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