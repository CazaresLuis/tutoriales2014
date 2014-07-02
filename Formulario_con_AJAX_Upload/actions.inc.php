<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * 
 * @package: tutoriales2014/Formulario_con_AJAX_Upload/
 * @author: Luis Fernando Cázares <luis.f.cazares@gmail.com>
 * @version Id: actions.inc.php 2014-03-28 01:22 _CazaresLuis_ ;
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// Directorio Raíz de la app
// Será utilizado en caso de requerir alguna librería
$root = '../';

error_reporting(E_ALL | E_STRICT);

require($root.'libs/php/jQuery-File-Upload-9.5.7/UploadHandler.php');

$opcionesUpload = array(
	'upload_dir' 	=> $root.'Formulario_con_AJAX_Upload/files/',
	'file_types' 	=> array(
            		'application/msword',
            		'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            		'application/pdf',
            		'application/vnd.oasis.opendocument.text')
);

$upload_handler = new UploadHandler($opcionesUpload);
