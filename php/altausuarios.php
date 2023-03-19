<?php
session_start();
if(isset($_SESSION['usuario'])){
  header('Location: FrontEnd.php');
}
//Con este codigo comprovamos si el usuario ya a iniciado session y si es asi, lo reedirigimos a la pagina de productos

if (isset($_POST['usuario'])){

  require_once "Phpdatabase.php";

  $sql="insert into usuarios (usuario,password,email) values ('".$_POST['usuario']."','" .$_POST['password']."','" .$_POST['email']."')";
 // var_dump($sql);
  $mysqli->query($sql);
  header('Location: ../html/Paginaproducto.php');
}

require_once "../html/cabecera.php";

?>

<div class="altausuario">
<section class="home">

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Usuario <br>
    <input type="text" name="usuario"><br>

    Contraseña <br>
    <input type="password" name="password"><br>

    Email <br>
    <input type="text" name="email"><br>
<br>
    <input class="btn-enviar" type="submit" value="Registrarse">

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
