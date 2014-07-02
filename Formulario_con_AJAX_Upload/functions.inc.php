<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/Formulario_con_AJAX_Upload/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: functions.inc.ph 2014-04-24 22:04 _CazaresLuis_ ;
 * @descripción: Funciones necesarias para la implemntación y ejecución del tutorial
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */


// Función para extraer un registro de la lista
function setFuncion($dbLink,$datos_form){

	$datosRegistro = false;

	$consulta = sprintf("INSERT INTO funciones_lenguajes_files SET
						lista_lenguaje='%s',
						lista_funcion='%s',
						lista_descripcion='%s',
						lista_tips='%s',
						lista_archivo='%s'",
						$datos_form['lista_lenguaje'],
						$datos_form['lista_funcion'],
						$datos_form['lista_descripcion'],
						$datos_form['lista_tips'],
						$datos_form['lista_archivo']);

	// Ejecutamos la cosnulta
	$respuesta = $dbLink -> query($consulta);

	if($dbLink -> affected_rows != 0){

		$datosRegistro = $dbLink -> insert_id;
	}

	return $datosRegistro;
}
?>