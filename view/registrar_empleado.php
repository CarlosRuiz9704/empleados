
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

error_reporting(E_ALL);

ini_set("error_reporting", E_ALL);

error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Empleados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/styles.css">.
  <script src="../assets/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</head>
<script>
    $(document).ready(function() {
        $("#form-registro").validate();
    });
</script>
<body>

<div class="container">
    <div class="col-sm-7">
        <h1>Registro de empleados</h1>
        <div class="alert alert-info">
            <strong>Los campos con (*) son obligatorios</strong>
        </div>
        <form id="form-registro" action="../controller/registrar_controller.php" method="post">
            <div class="form-group row">
                <label for="nombre" class="col-sm-3 col-form-label titulo">Nombre Completo*</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo del empleado" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="correo" class="col-sm-3 col-form-label titulo">Correo electronico*</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label titulo">Sexo*</label>
                <div class="col-sm-8">
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="M">
                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                        </div>
                        <div class="form-check ">
                        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="F">
                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                        </div>
                    </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label titulo">Area*</label>
                <div class="col-sm-9">
                    <select  class="form-control" id="area" name="area" required>
                        <?php
                            foreach ($areas as $area) {
                                echo "<option value='".$area['id']."'>".$area["nombre"]."</option>";
                            }                
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label titulo">Descripción*</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="descripcion" id="descripcion" required></textarea><br>
                    <div class="form-check ">
                            <input class="form-check-input" type="checkbox" id="1" value="1">
                            <label class="form-check-label" for="inlineCheckbox1">Deseo rebir boletin informativo</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-3 col-form-label titulo">Roles*</label>
                <div class="col-sm-8">
                    <?php 
                        foreach ($roles as $rol) {
                            echo '<div class="form-check ">
                                <input class="form-check-input" name="roles" type="checkbox" id="'.$rol['id'].'" value="'.$rol['id'].'">
                                <label class="form-check-label" for="inlineCheckbox1">'.$rol['nombre'].'</label>
                                </div>';
                        }   
                    ?><br>
                    <div class="form-group row">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</div>

</body>
</html>
