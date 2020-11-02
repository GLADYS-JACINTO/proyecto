<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="estilos.css"> -->
    <link rel="stylesheet" href="estilos_barra3.css">

    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
   <div id="navegador">
        <ul> 
            <li>Bienvenido: </li>
            <li><a href="./mensages.php">Mostrar mensages</a></li>
            <li><a href="./index.php">login</a></li>
        </ul>
    </div> 
       <br><br>   
    <div id="mensages">
        <h2>Publicaciones</h2>
        <div id="flex-container1">
            <?php 
              include "./conexion.php";
            
               /* Consultas de selección que devuelven un conjunto de resultados */
            if (!$resultado = $mysqli->query("select * from publicacion")) {    
                 
            }else{
                
            }
                 
                   /* obtener un array asociativo */
      while ($fila = $resultado->fetch_assoc()) {

           ?>
          <div id="contenedor">
              <div id="nombre">
                <p id="pame"><?php echo $fila['Nombre'] ?></p>  
              </div>
                <p id="text"><?php echo $fila['Mensage'] ?></</p>
          </div>
          <?php
      }
      
          ?>
        </div> 
    </div>   
    <!--<script src="apploginok.js"></script> -->
</body>
</html>