<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="estilos_barra.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="navegador">
        <ul>
             <li>Bienvenido: Editor</li>
            <li><a href="./principaleditor.php">Inicio</a></li>
            <li><a href="./formularioeditor.php">Registro publicacion</a></li>
            <li><a href="./formactaeditor.php">Actualizar publicacion</a></li>
            <li><a href="./mostrareditor.php">Mostrar publicacion</a></li>
            <li><a href="./eliminareditor.php">Eliminar publicacion</a></li>
            <li><a href="./cierra_edsesion.php">Salir</a></li>
        </ul>
    
    <?php
        include "./conexion.php";
  
         /* Consultas de selección que devuelven un conjunto de resultados */
            if (!$resultado = $mysqli->query("select * from publicacion")) {    
                 
            }else{
                
            }
            
        ?>
    <br></br>    
    <div>
    <div class="datagrid">
    <table border="1">
    <caption>Tabla de publicaciones</caption>
    <thead>
    <tr>
      <th>Identificador</th>
      <th>Nombre</th>
      <th>Mensage</th> 
    </tr>
  </thead>
  <tbody>
    <?php
      
      $cont = 0;
      $almac = 0;
      
      /* determinar el número de filas del resultado */
      $num_filas = $resultado->num_rows;

      for ($i = 0; $i <= $num_filas; $i++) {
       //     echo $i;
      $cont = 1 + $cont;
      
          /* obtener un array asociativo */
      while ($fila = $resultado->fetch_assoc()) {
    
       if ($cont%2==0){
        echo "El número es par -> " . $cont;
         echo "<tr>";
      }else{
        echo "El número es impar -> " . $cont;
          echo "<tr class='alt'>";
      } 
      
      echo "<td>".$fila['identificador']."</td>
            <td>".$fila['Nombre']."</td>
            <td>".$fila['Mensage']."</td> 
            </tr>";
      }
      }

      ?>
  </tbody>
</table>
   </div>
    </div>
    </div>
    <!-- <script src="app.js"></script> -->
</body>
</html>