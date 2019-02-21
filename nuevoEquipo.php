<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno .")". $conexion->connect_error;
}else{
  $id_equipo=$_POST["id_equipo"];
  $nombre=$_POST["nombre"];
  $ciudad=$_POST["ciudad"];
  $web=$_POST["web"];
$consulta="INSERT INTO equipo (id_equipo, ciudad, nombre, web) VALUES ('$id_equipo', '$nombre', '$ciudad', '$web')";
$resultado = $conexion->query($consulta);
 if($resultado==false){
 echo "maaaaaaaaaaaaaaal";
} else {
   echo "bieeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeen";
 }
 $resultado=$conexion->query("SELECT * FROM equipo");
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
var_dump($_POST)
     ?>
     <table >
    <tr>

      <td>id</td>
      <td>nombre</td>
      <td>ciudad</td>
      <td>web</td>
    </tr>
    <?php
   foreach ($resultado as $equipo) {
     echo "<tr>";
      echo "<td>".$equipo['id_equipo']."</td>";
      echo "<td>".$equipo['nombre']."</td>";
      echo "<td>".$equipo['ciudad']."</td>";
      echo "<td>".$equipo['web']."</td>";
     echo "</tr>";
   }
 ?>
  </table>
  </body>
</html>
