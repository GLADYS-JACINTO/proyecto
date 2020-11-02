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
    <br></br>
    <div id="formula">
    <form action="./formularioadmin.php" method="POST" id="formulario">
        <div class="formulario">
            <p id="pn">Registro usuario</p>
            <div class="grupo">
                <input type="text" name="nombre" id="name" placeholder="Nombre" required autofocus ><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required ><span class="barra"></span>
                <label for="">Apellidos</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="email" placeholder="Correo electronico" required ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="tel" name="telefono" id="telefono" max="10"placeholder="Ingrese telefono" required ><span class="barra"></span>
                <label for="">Telefono</label>
            </div>
            <div class="grupo">
                <input type="text" name="contrasena" id="password" placeholder="Ingrese una contraseña" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="divselector grupo"> 
              <select name="tipousuario" class="selector" required>
                <option value="nulo">Seleccione un usuario:</option>    
                <option value="administrador">Administrador</option>    
                <option value="editor">Editor</option>    
                ...   
              </select>
            </div>
            <button type="submit">Registrar</button>
            <p class="warnings" id="warnings"></p>
            <imput type="submit" value ="Login" class="boton">
            <!--<p id="pn2">¿Ya tienes una cuenta? <a class="link"href="index.html">Iniciar sesion</a></p> -->
        </div>
    </form>
    </div>
    </div>
     <?php
        include "./conexion.php";

        //Validamos que hayan llegado estas variables, y que no esten vacias:
        if (isset($_POST["nombre"], 
                  $_POST["apellidos"], 
                  $_POST["email"], 
                  $_POST["telefono"], 
                  $_POST["contrasena"], 
                  $_POST["tipousuario"]) and 
                  $_POST["nombre"] !="" and 
                  $_POST["apellidos"] !="" and 
                  $_POST["email"] !="" and 
                  $_POST["telefono"] !="" and 
                  $_POST["contrasena"] !="" and 
                  $_POST["tipousuario"] !=""
        ){
   
            $nombre = $_POST["nombre"]; 
            $apellido = $_POST["apellidos"]; 
            $email = $_POST["email"]; 
            $telefono = $_POST["telefono"]; 
            $contrasena = $_POST["contrasena"]; 
            $tipousuario = $_POST["tipousuario"];
            
            /* Consultas de selección que devuelven un conjunto de resultados */
          $resultado = "Insert into admin (Nombre, Apellidos, Email, Telefono, Contrasena, Usuario) values('$nombre', '$apellido','$email','$telefono','$contrasena','$tipousuario')";    
                
                if ($mysqli->query($resultado) === TRUE) {
                 
                } else {
                  
                }
        }
    ?>
    
    <!-- <script src="app.js"></script> -->
</body>
</html>