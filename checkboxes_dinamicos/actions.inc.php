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
		if(isset($_POST['action'])){
			
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