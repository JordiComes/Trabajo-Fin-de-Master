<?php
require_once "../html/cabecera.php";

?>
<div class="vistausuario">
<p class="titulovista">Pedidos en trámite</p>

<table class="tablapedido">

  <tr>
    <th>id</th>
    <th>id_usuario</th>
    <th>nombre</th>
    <th>fecha</th>
  </tr>


  <?php

  require_once "Phpdatabase.php";

  if ($resultado = $mysqli->query("SELECT p.id,p.id_usuario,u.usuario,p.fecha FROM pedidos p, usuarios u where u.id=p.id_usuario")) {
var_dump($resultado->num_rows);
    while ($fila = $resultado->fetch_assoc()) {

      echo '<tr>';
      echo '<td>'.$fila['id'].'</td>';
      echo '<td>'.$fila['id_usuario'].'</td>';
      echo '<td>'.$fila['usuario'].'</td>';
      echo '<td>'.$fila['fecha'].'</td>';

      echo '</tr>';
    }


    $resultado->close();

  }else {
      var_dump($mysqli->error);
  }

  ?>

</table>
</div>
  <script src="../JavaMain.js"></script>
</body>
</html>
