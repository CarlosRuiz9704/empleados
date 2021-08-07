<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Listado de Empleados</h1>
  <a class="btn btn-primary float-right" href="controller/registrar_controller.php"><i class='fa fa-user-plus'></i> Crear</a><br><br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th><i class="fa fa-user"></i> Nombre</th>
        <th><i class="fa fa-at"></i> Email</th>
        <th><i class="fa fa-venus-mars"></i> Sexo</th>
        <th><i class="fa fa-briefcase"></i> Area</th>
        <th><i class="fa fa-envelope"></i> Boletin</th>
        <th>Modificar</th>
        <th> Eliminar</th>
      </tr>
    </thead>
    <tbody>
       <?php
          foreach ($datos as $dato) {
              $nombre=$dato["nombre"];
              $email=$dato["email"];
              $sexo=$dato["sexo"];
              $area=$dato["area"];
              $boletin=$dato["boletin"];
              if($sexo=='M' || $sexo=="m"){
                $sexo="Masculino";
              }else if($sexo=='F' || $sexo=="f"){
                $sexo="Femenino";
              }

              if($boletin==1){
                $boletin="Si";
              }else if($boletin==0){
                $boletin="No";
              }

             echo "<tr>".
                    "<td>".$nombre."</td>".
                    "<td>".$email."</td>".
                    "<td>".$sexo."</td>".
                    "<td>".$area."</td>".
                    "<td>".$boletin."</td>".
                    "<td><button type='button'><i class='fa fa-pencil-square-o'></i></button></td>".
                    "<td><button type='button'><i class='fa fa-trash'></i></button></td>".
                  "</tr>";
          }
        ?>
    </tbody>
  </table>
</div>

</body>
</html>
