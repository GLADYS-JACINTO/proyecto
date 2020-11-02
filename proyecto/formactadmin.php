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
            <li>Bienvenido: Administrador</li>
            <li><a href="./principaladmin.php">Inicio</a></li>
            <li><a href="./formularioadmin.php">Registro Usuario</a></li>
            <li><a href="./formactadmin.php">Actualizar Registro</a></li>
            <li><a href="./mostraradmin.php">Mostrar Registro</a></li>
            <li><a href="./eliminaradmin.php">Eliminar Registro</a></li>
            <li><a href="./cierra_adsesion.php">Salir</a></li>
        </ul>
    <?php
       include "./conexion.php";
        
         /* Consultas de selección que devuelven un conjunto de resultados */
            if (!$resultado = $mysqli->query("select * from admin")) {    
                 
            }else{
                
            }
            
        ?>
    <br></br>
    
    <div>
    <div class="datagrid">
    <table border="1">
    <caption>Tabla de Usuarios</caption>
    <thead>
    <tr>
      <th>Identificador</th>
      <th>Nombre</th>
      <th>Apellidos</th> 
      <th>Email</th>
      <th>Telefono</th>
      <th>Contraseña</th>
      <th>Usuario</th>
    </tr>
  </thead>
  <tbody>
    <?php
      
      $cont = 0;
      $almac = 0;
      
      /* determinar el número de filas del resultado */
      $num_filas = $resultado->num_rows;

    //printf("Resultado obtenido tiene %d filas.\n", $num_filas );
      
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
      <td>".$fila['Apellidos']."</td> 
      <td>".$fila['Email']."</td>
      <td>".$fila['Telefono']."</td>
      <td>".$fila['Contrasena']."</td>
      <td>".$fila['Usuario']."</td>
      </tr>";
      }
      }
          
      ?>
  </tbody>
</table>
   </div>
    </div>
    <div id="formula">
    <form action="./formularioadminreg.php" method="POST" id="formulario">
        <div class="formulario">
            <p id="pn">actualiza usuario</p>
             <p id="pn3">seleccione el id del usuario a actualizar</p>
              <select name="tipousuario" class="selector" required>
                <option value="nulo">Seleccione el identificardor del usuario:</option> 
        
                <?php                
                /* Consultas de selección que devuelven un conjunto de resultados */
                if (!$resultado = $mysqli->query("select * from admin")) {    

                }else{
                           /* obtener un array asociativo */
                     while ($fila = $resultado->fetch_assoc()) {
                     echo "<option value =".$fila['identificador'].">".$fila['identificador']."</option>"; 
                     }
                }
                       ?> 
                ...   
              </select>
            </div>
            <button type="submit">actualizar</button>
            <p class="warnings" id="warnings"></p>
            <imput type="submit" value ="Login" class="boton">
            <!--<p id="pn2">¿Ya tienes una cuenta? <a class="link"href="index.html">Iniciar sesion</a></p> -->
        </div>
    </form>
    </div>
    </div>
    <!-- <script src="app.js"></script> -->
</body>
</html>