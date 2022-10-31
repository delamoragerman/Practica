<?php

// Obtenemos el controlador que queremos cargar
$nombre_controlador = $_REQUEST['_c_'];

//Creamos el controlador
require_once "ctrlrs/$nombre_controlador.ctrlr";
require_once "ctrlrs/data.base.ctrlr";


//Pasa el nombre del controlador a una frase con espacios
$nombre_controlador = str_replace("_", " ", $nombre_controlador);
//Convierte a mayusculas la primera letra de cada palabra
$nombre_clase_controlador .= str_replace(" ", "", ucwords(" " . $nombre_controlador)) . "Ctrlr";

$_controlller = new $nombre_clase_controlador;

//***************************************************************************************************
//Obtenemos la accion a ajecutar
$_accion = isset($_REQUEST['_a_']) ? $_REQUEST ['_a_'] : 'index';

//Pasa el nombre de la accion a una frase con espacios
$nombre_accion = str_replace("_", " ", $_accion);
//Convierte a maysculas la primera letra de cada palabra
$nombre_metodo_accion .= str_replace(" ", "", ucwords(" $nombre_accion"));

// Llama la accion
$_controller->$nombre_metodo_accion();

?>