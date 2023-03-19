<?php
session_start();
if(isset($_SESSION['usuario'])){
  header('Location: FrontEnd.php');
}
$error="";
if (isset($_POST['usuario'])){

  require_once "Phpdatabase.php";

  $sql="SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' and password='".$_POST['password']."'";
  //var_dump($sql);
  $resultado=$mysqli->query($sql);
  if($resultado->num_rows>0){
$usuario=$resultado->fetch_assoc();

    $_SESSION['usuario']=$_POST['usuario'];
      $_SESSION['id_usuario']=$usuario['id'];
    header('Location: vistausuario.php');
  }else{
    $error="el usuario no existe";
  }

}

require_once "../html/cabecera.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trabajo Fin de Master</title>
  <link href="../CSSmain.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="script" href="../JavaMain.js">
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
        <li><a href="login.php">Iniciar Session</a> </li>
        <li><a href="altausuarios.php">Registrarse</a> </li>
        <li><a href="#"><button class="carrito" type="button">Carrito</button> </a></li>

      </ul>
    </nav>

  </div>
</header>

<div class="login-usuario">

<section class="home">
  <?php

  echo $error;

  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Usuario <br>
    <input type="text" name="usuario"><br>

    Contraseña <br>
    <input type="password" name="password"><br>

    <input class="btn-enviar" type="submit" value="Iniciar session">

  </form>

</section>

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
</body>
</html>

