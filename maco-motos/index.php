<?php
// CONTROLADORES
require_once "system/controladores/plantilla.controlador.php";
require_once "system/controladores/usuarios.controlador.php";

//MODELOS
require_once "system/modelos/usuarios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
