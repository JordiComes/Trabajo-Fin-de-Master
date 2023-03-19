<?php

session_start();
if(isset($_SESSION['usuario'])){
    $registrado=true;
}else $registrado=false;

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

<section class="home">

  <video class="videoPrincipal" src="../img/Neighborhood%20in%20Milan.mp4" autoplay muted loop></video>

  <div id="titulo" class="Titulo">
    <h1>Solarium.<br><span>Protocol</span></h1>
    <p>Bienvenido a la revolución criptográfica</p>
    <a href="https://coinmarketcap.com/"><button> <span>Saber más</span> </button></a>
  </div>

</section>

<header class="header">

<div class="navbar">
  <img src="../img/Logo.png" id="logo" class="logo">
  <span class="sandwich">Menú</span>
  <nav class="navegador">
    <ul>
      <li><a href="/TFM/html/FrontEnd.php">Inicio</a></li>
      <li><a href="/TFM/html/FrontEnd.php#roadmap">Roadmap</a></li>
      <li><a href="/TFM/html/FrontEnd.php#tokenomics">Tokenomics</a></li>
      <li><a href="/TFM/html/Paginaproducto.php">Rigs Minería</a></li>
      <li><a href="/TFM/html/FrontEnd.php#nosotros">Nosotros</a> </li>
      <li> <a href="/TFM/html/FrontEnd.php#faqs">FAQ's</a></li>
        <?php
        if($registrado==true){
            ?>
            <li> <a href="/TFM/php/cerrarsession.php">Cerrar Session</a> </li>

            <?php
        }
        else{
            ?>
            <li><a href="/TFM/php/login.php">Iniciar Session</a></li>
            <li><a href="/TFM/php/altausuarios.php">Registrarse</a></li>
            <?php
        }
        ?>

    </ul>
  </nav>

</div>
</header>