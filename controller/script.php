<?php
require_once("../model/empleados_model.php");

switch ($_POST["evento"]){
    case "update_empleado": {
        $id 		    = $_POST['id'];
        $nombre 		= $_POST['nombre'];
        $correo 	    = $_POST['correo'];
        $sexo 			= $_POST['sexo'];
        $area 			= $_POST['area'];
        $boletin 		= $_POST['boletin'];

        if($id!='' or $id=null){
            $per=new personas_model();
            $respuesta=$per->update_empleado($id,$nombre,$email,$sexo,$area, $descripcion);
            echo $respuesta;
        }else{
            echo "error en los campos";
        }
        break;
        }
}
?>