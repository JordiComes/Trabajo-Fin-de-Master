<?php

session_start();
if(isset($_SESSION['usuario'])){
    $registrado=true;
}else $registrado=false;

?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trabajo Fin de Master</title>
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../PaginaCssProductos.css">
</head>
<body>

<header class="header">

  <div class="navbar">
    <img src="../img/Logo.png" id="logo" class="logo">
    <nav class="navegador">
      <ul>
        <li><a href="FrontEnd.php">Inicio</a></li>
        <li><a href="FrontEnd.php">Roadmap</a></li>
        <li><a href="FrontEnd.php">Tokenomics</a></li>
        <li><a href="Paginaproducto.php">Rigs Minería</a></li>
        <li><a href="FrontEnd.php">Nosotros</a></li>
        <li><a href="FrontEnd.php">FAQ's</a></li>
          <?php
          if($registrado==true){
              ?>
              <li> <a href="../php/cerrarsession.php">Cerrar Session</a> </li>

              <?php
          }
          else{
              ?>
              <li><a href="../php/login.php">Iniciar Session</a></li>
              <li><a href="../php/altausuarios.php">Registrarse</a></li>
              <?php
          }
          ?>
      </ul>
    </nav>

  </div>
  <div class="container">
    <div class="row">


      <div class="two columns u-pull-right">

        <ul>
          <li class="submenu">
            <img src="../img/cart.png">

            <div id="carrito">
              <p class="vacio">carrito vacio</p>
              <table id="lista-carrito" class="u-full-width">
                <thead>
                <tr>
                  <th>Imagen</th>
                  <th>Productos</th>
                  <th>Precio</th>
                </tr>
                </thead>

                <tbody>



                </tbody>
              </table>

              <a href="#" id="vaciar-carrito" class="button u-full-width">vaciar carrito</a>
              <a id="finalizarcompra" href="../php/finalizarcompra.php" class="button u-full-width">finalizar compra</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>

<div class="hero">
  <div class="container">
    <div class="row">
      <div class="six columns">
        <div class="contenido-hero">
          <h2>Pide un producto, nosotros te lo llevamos</h2>
          <p>Todos los pedidos con descuento</p>
          <form>
            <input class="u-full-width" type="text" placeholder="¿Que te gustaría comprar?" id="buscador">
            <input type="submit" class="submit-buscador">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="barra">
  <div class="container">
    <div class="row">
      <div class="four columns icono icono1">
        <p>100 productos diferentes<br>
          Explora los nuevos productos</p>
      </div>
      <div class="four columns icono icono2">
        <p>Expertos<br>
          Prueba las nuevas combinaciones</p>
      </div>
      <div class="four columns icono icono3">
        <p>Envío<br>
          Gratis hasta tu casa</p>
      </div>
    </div>
  </div>
</div>

<div id="lista-catalogo" class="container">
  <h1 class="encabezado">Pedidos en linea</h1>
  <div class="row">
    <div class="four columns">
      <div class="card">
        <img src="../img/Rigbajo.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Rig economico</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">1300€<span class="u-pull-right">1000€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar al carrito</a>
        </div>
      </div>
    </div>

    <div class="four columns">
      <div class="card">
        <img src="../img/Rigmedio.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Rig eficiente</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">3800€<span class="u-pull-right">3500€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Agregar al carrito</a>
        </div>
      </div>
    </div>

    <div class="four columns">
      <div class="card">
        <img src="../img/RigPro.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Rig Pro</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">10000€<span class="u-pull-right">8750€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Agregar al carrito</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="four columns">
      <div class="card">
        <img src="../img/Solarminefoto.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Servicio</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">300€<span class="u-pull-right">200€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Agregar al carrito</a>
        </div>
      </div>
    </div>

    <div class="four columns">
      <div class="card">
        <img src="../img/SolarmineBtc.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Garantia</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">1500€<span class="u-pull-right">1000€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Agregar al carrito</a>
        </div>
      </div>
    </div>

    <div class="four columns">
      <div class="card">
        <img src="../img/remoto.jpg" class="u-full-width">
        <div class="info-card">
          <h4>Seguro</h4>
          <p>Envio Gratis</p>
          <img src="../img/estrellas.png">
          <p class="precio">350€<span class="u-pull-right">200€</span></p>
          <a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Agregar al carrito</a>
        </div>
      </div>
    </div>
  </div>


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="four columns">
        <nav class="menu">
          <a class="enlace" href="#">Contacto</a>
          <a class="enlace" href="#">Atención al Cliente</a>
          <a class="enlace" href="#">Teléfono</a>
          <a class="enlace" href="#">Registrarse</a>
          <a class="enlace" href="#">Inicio</a>
        </nav>

      </div>

      <div class="four columns">
        <nav class="menu">
          <a class="enlace" href="#">Fabrica</a>
          <a class="enlace" href="#">Ubicació</a>
          <a class="enlace" href="#">Terminos Legales</a>
        </nav>

      </div>
    </div>
  </div>
</footer>


  <script type="text/javascript" src="../JSproductos.js"></script>
</body>

</html>
