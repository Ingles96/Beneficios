<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios semana 1</title>
  </head>
  <body>
<h1>BENEFICIOS SEMANA 2</h1>
<?php

//Me conecto a la base de datos
$conexion = new mysqli("localhost", "root", "", "beneficios");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else {


    $gasto2 = $conexion->query("SELECT id,gasto,num_semana FROM gastos WHERE num_semana='2'");
$gastoscont2=0;
    while ($gastosem2=$gasto2->fetch_assoc()) {
$gastoscont2=$gastoscont2+$gastosem2['gasto'];
    }

    $venta2 = $conexion->query("SELECT id,venta,num_semana FROM ventas WHERE num_semana='2'");
$ventascont2=0;
    while ($ventasem2=$venta2->fetch_assoc()) {
$ventascont2=$ventascont2+$ventasem2['venta'];
  }

  $beneficios=$ventascont2-$gastoscont2;
  echo "El beneficio de la semana 2 es " . $beneficios;


}
?>

  </body>
</html>
