<?php

require_once "Phpdatabase.php";

session_start();
if(isset($_SESSION['usuario'])){
  $registrado=true;
}else $registrado=false;

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gestión de usuarios</title>
  <link href="../csstablas.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
if($registrado==true){
?>
<p>El usuario esta registrado</p>

<?php
}
else{
  ?>
<p>El usuario no esta registrado</p>
<?php
}
?>
<a href="cerrarsession.php">Cerrar Session</a>

<h1>Backoffice</h1><hr>

<p>Usuarios</p>
<!-- <a href="finalizarcompra.php"  class="button u-full-width">finalizar compra</a> -->
<div >
<table class="tablas">

<tr>
  <th>id</th>
  <th>usuario</th>
  <th>password</th>
  <th>email</th>

</tr>

  <?php

  if ($resultado = $mysqli->query("SELECT * FROM usuarios")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['usuario'].'</td>';
      echo '<td>'.$fila['password'].'</td>';
      echo '<td>'.$fila['email'].'</td>';
      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>
</div>
<p>Productos</p>

<table class="tablas">

  <tr>
    <th>id</th>
    <th>modelo</th>
    <th>descripcion</th>
    <th>precio</th>
    <th>id_categoria</th>
    <th>stock</th>
  </tr>

  <?php

  if ($resultado = $mysqli->query("SELECT * FROM productos")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['modelo'].'</td>';
      echo '<td>'.$fila['descripcion'].'</td>';
      echo '<td>'.$fila['precio'].'</td>';
      echo '<td>'.$fila['id_categoria'].'</td>';
      echo '<td>'.$fila['stock'].'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>
</div>
<p>Pedidos</p>
<div>
<table class="tablas">

  <tr>
    <th>id</th>
    <th>id_usuario</th>
    <th>nombre</th>
    <th>fecha</th>
  </tr>


  <?php

  if ($resultado = $mysqli->query("SELECT p.id,p.id_usuario,u.usuario,p.fecha FROM pedidos p, usuarios u where u.id=p.id_usuario")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['id_usuario'].'</td>';
      echo '<td>'.$fila['usuario'].'</td>';
      echo '<td>'.$fila['fecha'].'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>
</div>
<p>Detalle del pedido</p>
<div>
<table class="tablas">

  <tr>
    <th>id</th>
    <th>id_pedido</th>
    <th>id_producto</th>
    <th>modelo</th>
    <th>precio</th>
    <th>cantidad</th>
    <th>subtotal</th>
  </tr>

  <?php

  if ($resultado = $mysqli->query("SELECT dp.id, dp.id_pedido, dp.id_producto, p.modelo, dp.precio, dp.cantidad FROM detalle_pedido dp, productos p where dp.id_producto=p.id")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['id_pedido'].'</td>';
      echo '<td>'.$fila['id_producto'].'</td>';
      echo '<td>'.$fila['modelo'].'</td>';
      echo '<td>'.$fila['precio'].'</td>';
      echo '<td>'.$fila['cantidad'].'</td>';
      echo '<td>'.($fila['cantidad'] *$fila['precio']).'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>
</div>
<p>Pago</p>

<table class="tablas">

  <tr>
    <th>id</th>
    <th>tarjeta</th>
    <th>expiracion</th>
    <th>cvc</th>
    <th>id_usuario</th>
  </tr>


  <?php

  if ($resultado = $mysqli->query("SELECT p.id,p.tarjeta,p.expiracion,p.cvc,u.usuario FROM pago p, usuarios u where u.id=p.id_usuario")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['tarjeta'].'</td>';
      echo '<td>'.$fila['expiracion'].'</td>';
      echo '<td>'.$fila['cvc'].'</td>';
      echo '<td>'.$fila['usuario'].'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>


<p>Finalizar</p>
<div>
<table class="tablas">

  <tr>
    <th>id</th>
    <th>nombre</th>
    <th>apellidos</th>
    <th>direccion</th>
    <th>codigo_postal</th>
    <th>localidad</th>
    <th>provincia</th>
    <th>email</th>
    <th>id_usuario</th>
  </tr>


  <?php

  if ($resultado = $mysqli->query("SELECT p.id,p.nombre,p.apellidos,p.direccion,p.codigo_postal,p.localidad,p.provincia,p.email,u.usuario FROM finalizar p, usuarios u where u.id=p.id_usuario")) {

    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['nombre'].'</td>';
      echo '<td>'.$fila['apellidos'].'</td>';
      echo '<td>'.$fila['direccion'].'</td>';
      echo '<td>'.$fila['codigo_postal'].'</td>';
      echo '<td>'.$fila['localidad'].'</td>';
      echo '<td>'.$fila['provincia'].'</td>';
      echo '<td>'.$fila['email'].'</td>';
      echo '<td>'.$fila['usuario'].'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }

  ?>

</table>
</div>



</body>
</html>
