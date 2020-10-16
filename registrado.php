<?php
    $usuario = $_POST['user'];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = $_POST["password"];
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  </head>
  <body>
      <table style="width:40%">
          <tr >
             <th>Usuario</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Email</th>
             <th>Password</th>
          </tr>
          <tr>
             <td><?php  echo $usuario; ?></td>
             <td><?php  echo $nombre; ?></td>
             <td><?php  echo $apellido; ?></td>
             <td><?php  echo $email; ?></td>
             <td><?php  echo $password; ?></td>
            </tr>
      </table>
      <p>
         <a class="regresar" href="registro.html">Regresar</a>
      </p>
  </body>

</html>
