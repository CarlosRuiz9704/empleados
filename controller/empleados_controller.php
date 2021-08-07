<?php

require_once("model/empleados_model.php");
$per=new personas_model();
$datos=$per->get_personas();
 
//Llamada a la vista
require_once("view/listado_empleados.php");
?>
