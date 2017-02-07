<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actores por temporada</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="actores.php">Actores de la Serie</a></td>
      </tr>
    </table>

    <table border="1px">
      <thead>
       <tr>
         <th>Nombre en la serie</th>
         <th>Nombre real</th>
         <th>Episodio</th>
       </tr>
      </thead>
      <?php
      include 'basedatos.php';
      $juego=new JuegoTronos();
     $temporada=$juego->actoresTemporada($_POST["episodio"]);
     while ($fila=$temporada->fetch_assoc()) {
       echo "<tr><td>" .$fila["serie_name"] ."</td><td>" .$fila["name"] ."</td><td>".$fila["episode"] ."</td></tr>";
       }
       ?>
    </table>
  </body>
</html>
