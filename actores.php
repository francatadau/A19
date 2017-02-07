<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="formulario.html">Actores por episodio</a></td>
      </tr>
    </table>

       <table border="1px">
         <thead>
          <tr>
            <th>Nombre en la serie</th>
            <th>Nombre real</th>
          </tr>
         </thead>
         <?php
         include 'basedatos.php';
         $juego=new JuegoTronos();
        $actores=$juego->actoresSerie();
        while ($fila=$actores->fetch_assoc()) {
          echo "<tr><td>" .$fila["serie_name"] ."</td><td>" .$fila["name"] ."</td></tr>";
          }
          ?>
       </table>
  </body>
</html>
