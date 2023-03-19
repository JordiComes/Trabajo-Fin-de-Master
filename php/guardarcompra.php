<?php

if (isset($_POST['nombre'])){
  var_dump($_POST);
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $direccion=$_POST['direccion'];
  $codigo_postal=$_POST['codigo_postal'];
  $localidad=$_POST['localidad'];
  $provincia=$_POST['provincia'];
  $email=$_POST['email'];
  $tarjeta=$_POST['tarjeta'];
  $expiracion=$_POST['expiracion'];
  $cvc=$_POST['cvc'];
$fecha=date('Y-m-d');
session_start();
$id_usuario=$_SESSION['id_usuario'];

  require_once "Phpdatabase.php";

  $sql = "insert into finalizar (nombre, apellidos, direccion, codigo_postal, localidad, provincia, email, id_usuario) VALUES('$nombre', '$apellidos', '$direccion', '$codigo_postal', '$localidad', '$provincia', '$email', '$id_usuario')";
  $mysqli->query($sql);
  $id_direccion=$mysqli->insert_id;
  $sql = "insert into pago (tarjeta, expiracion, cvc, id_usuario) VALUES('$tarjeta', '$expiracion', '$cvc', '$id_usuario')";
  $mysqli->query($sql);
  $id_tarjeta=$mysqli->insert_id;

  $sql="insert into pedidos (id_usuario, fecha, id_tarjeta, id_direccion) values ($id_usuario, '$fecha',$id_tarjeta, $id_direccion)";
  // var_dump($sql);
  $mysqli->query($sql);
  $id_pedido=$mysqli->insert_id;
  $sql="insert into pedidos (id_usuario, fecha) values ($id_usuario, '$fecha')";

  $productos = $_POST['productos'];
  $productos = rtrim($productos, ",");
  $productos = explode(",", $productos);
  foreach($productos as $producto) {
    $productoDB = $mysqli->query("SELECT * FROM productos WHERE id = '$producto'");
    $productoDB = $productoDB->fetch_assoc();
    $precioProductos = $productoDB['precio'];
    $sql = "INSERT INTO detalle_pedido (id_pedido, id_producto, precio, cantidad) VALUES ($id_pedido, $producto, $precioProductos, 1)";
    $mysqli->query($sql);
  }



  header('Location: /TFM/html/FrontEnd.php');
}
