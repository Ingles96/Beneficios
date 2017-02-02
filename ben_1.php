<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios semana 1</title>
  </head>
  <body>
<h1>BENEFICIOS SEMANA 1</h1>
<?php

//Me conecto a la base de datos
$conexion = new mysqli("localhost", "root", "", "beneficios");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
  }else {


    $gasto1 = $conexion->query("SELECT id,gasto,num_semana FROM gastos WHERE num_semana='1'");
$gastoscont1=0;
    while ($gastosem1=$gasto1->fetch_assoc()) {
$gastoscont1=$gastoscont1+$gastosem1['gasto'];
    }

    $venta1 = $conexion->query("SELECT id,venta,num_semana FROM ventas WHERE num_semana='1'");
$ventascont1=0;
    while ($ventasem1=$venta1->fetch_assoc()) {
$ventascont1=$ventascont1+$ventasem1['venta'];
  }

  $beneficios=$ventascont1-$gastoscont1;
  echo "El beneficio de la semana 1 es " . $beneficios;


}
?>

  </body>
</html>
