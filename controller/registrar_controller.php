<?php
    require_once("../conn/conexion.php");
    require_once("../model/empleados_model.php");
    $per=new personas_model();
    $areas=$per->getArea();
    $roles=$per->getRoles();

    if(isset($_POST['nombre']) and isset($_POST['sexo']) and isset($_POST['correo']) and isset($_POST['area']) and isset($_POST['descripcion']) and isset($_POST['roles'])){
        $data = array(
            'nombre' => $_POST['nombre'],
            'email' => $_POST['correo'],
            'sexo' => $_POST['sexo'],
            'area_id' => $_POST['area'],
            'descripcion' => $_POST['descripcion']
          );
          $per->insertData($_POST['nombre'],$_POST['correo'],$_POST['sexo'],$_POST['area'],$_POST['descripcion'],$_POST['roles']);
    }

    require_once("../view/registrar_empleado.php");
?>