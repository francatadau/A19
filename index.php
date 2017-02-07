<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos.</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td>Logo</td>
        <td><a href="actores.php">Actores</a></td>
        <td><a href="formulario.html">Actores por episodio</a></td>
      </tr>
    </table>
      <h2>RESUMEN DE LA SERIE: </h2><br>
      <?php
        include 'basedatos.php';
        $juego=new JuegoTronos();

        $resumen=$juego->resumenSerie();
        while ($fila=$resumen->fetch_assoc()) {
          echo "<h3>".$fila["plot"]."</h3>";
        }
       ?>

  </body>
</html>
