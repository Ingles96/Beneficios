<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios semana 2</title>
  </head>
  <body>

<?php

//Me conecto a la base de datos
$conexion = new mysqli("localhost", "root", "", "beneficios");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else {

?>
<h1>Total gastos semana 1</h1>

<?php

$resultado = $conexion->query("SELECT id,gasto,num_semana FROM gastos WHERE num_semana='2'");


while ($fila=$resultado->fetch_assoc()) {
  echo "Gasto semana 2 = ".$fila["gasto"].  "<br>";
}
 ?>
<h1>Total ventas semana 1</h1>

  <?php
  $resultado4 = $conexion->query("SELECT id,venta,num_semana FROM ventas WHERE num_semana='1'");


  while ($fila=$resultado4->fetch_assoc()) {
    echo "Ventas semana 1 = ".$fila["venta"].  "<br>";
  }

  }
   ?>



  </body>
</html>
