<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/Formulario_con_AJAX_Upload/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: actions_db.inc.php 2014-04-24 22:14 _CazaresLuis_ ;
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
			if($_POST['action'] == 'setFuncion' && $_POST['lista_archivo'] != ''){
				// ejecutamos la función para guardar en la base de datos

				sleep(3);

				if($datosRegFuncion = setFuncion($mysqli,$_POST)){

					$response['result'] = true;
					$response['datos'] = $datosRegFuncion;
					$response['mensaje'] = "Registro guardado correctamente";

				}else{
					$response['mensaje'] = "No fue posible guardar el registro";
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
