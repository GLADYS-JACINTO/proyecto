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
    
    <br></br>
    <div id="formula">
    <form action="./actpublicacion.php" method="POST" id="formulario">
        <div class="formulario">
            <p id="pn">actualiza usuario</p>
            <?php
            include "./conexion.php";

              //traspasamos a variables locales, para evitar complicaciones con las comillas:
            $publicacion = $_POST["publicacion"];

             /* Consultas de selección que devuelven un conjunto de resultados */
                if (!$resultado = $mysqli->query("select * from publicacion where identificador ='$publicacion'")) { 

                }else{
                           /* obtener un array asociativo */
                     $fila = $resultado->fetch_assoc();

            ?>
            <!--<label for="">identificador</label> --->
            <div class="grupo">
                <input type="text" name="identificador" value="<?php echo $fila['identificador'] ?>" id="identifacador" placeholder="ide" disabled><span class="barra"></span>
                <input type="text" name="iden" value="<?php echo $fila['identificador'] ?>" id="identifacador" class="hid" placeholder="ide" type="hidden" >
                <label for="">identificador</label>
            </div>
            <div class="grupo">
                <input type="text" name="nombre" value="<?php echo $fila['Nombre'] ?>" id="name" placeholder="Nombre" required autofocus ><span class="barra"></span>
                <label for="">Nombre publicacion</label>
            </div>
            <div class="grupo">
                <input type="text" name="identificador" value="" id="identifacador" class="hid" placeholder="ide" type="hidden" >
                <br>
                <textarea type="textarea" rows="10" cols="10" name="textarea"   class="texare" id="textarea" placeholder="Mensage" required ><?php echo $fila['Mensage'] ?></textarea><span class="barra"></span>
                <label for="">Mensage publicacion</label>
            </div>
              <?php
                  }
                ?>    
            <button type="submit">actualizar</button>
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