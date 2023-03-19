<?php

/*Con esto evitamos que un usuario anónimo compre sin registrarse antes*/
session_start();
if(!isset($_SESSION['usuario'])){
  header('Location: ../html/FrontEnd.php');
}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trabajo Fin de Master</title>
  <link href="../CSSproductos.css" rel="stylesheet" type="text/css">
  <link href="../CSSfinalizar.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>

  <div class="navbar">

    <img src="../img/Logo.png" id="logo" class="logo">

    <span class="sandwich">Menú</span>

    <nav class="navegador">
      <ul>

        <li><a href="../html/FrontEnd.php">Inicio</a></li>
        <li><a href="../html/Paginaproducto.php">Rigs Minería</a></li>
        <li><a href="#"><button class="carrito" type="button">Carrito</button> </a></li>

      </ul>
    </nav>

  </div>
</header>

<div class="finalizar">
  <div class="datos">

    <h1>Tus productos</h1><br>

    <div id="productos-carrito">

      <table border="1px" id="tabla-productos">
        <thead>
        <tr>
          <th>Imagen</th>
          <th>Descripción</th>
          <th>Precio</th>
        </tr>
        </thead>
        <tbody id="contenedor-productos">

        </tbody>
        <tfoot id="total-productos">

        </tfoot>
      </table>

      <script>



      </script>
    </div>


  </div>

  <form action="guardarcompra.php" method="post" class="datos">
<input type="hidden" name="productos" id="input-productos">

    <h2>Finalizar Compra</h2><br>

    Nombre:
    <input type="text" name="nombre"><br>

    Apellidos:
    <input type="text" name="apellidos"><br>

    Dirección:
    <input type="text" name="direccion"><br>

    Codigo Postal:
    <input type="text" name="codigo_postal"><br>

    Localidad:
    <input type="text" name="localidad"><br>

    Provincia:
    <input type="text" name="provincia"><br>

    Email:
    <input type="text" name="email"><br>
<br>
    <h3>Pagar con tarjeta</h3><hr><br>


    Tarjeta de crédito:
    <input type="text" name="tarjeta"><br>

    Fecha de expiración:
    <input type="date" name="expiracion"><br>

    Codigo (CVC):
    <input type="password" name="cvc"><br>

    Realizar pago ahora<br>
    <input class="btn-pagar" type="submit" value="Pagar">

  </form>

</div>



<footer class="pie-pagina">
  <div class="grupo-1">
    <div class="box">
      <figure>
        <a href="#">
          <img src="../img/Logo.png" alt="Logo">
        </a>
      </figure>
    </div>
    <div class="box">
      <h2>SOBRE NOSOTROS</h2>
      <ul>
        <li>Producto</li>
        <li>¿Quiénes Somos?</li>
        <li>Contacto</li>
      </ul>
    </div>
    <div class="box">
      <h2>SÍGUENOS</h2>
      <div class="red-social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-youtube"></a>
      </div>
    </div>
  </div>
  <div class="grupo-2">
    <small>2022 <b>Jordi Comes</b> Trabajo Fin de Master</small>
  </div>
</footer>



<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../JavaMain.js"></script>
<script src="../finalizarcompra.js"></script>
</body>
</html>
