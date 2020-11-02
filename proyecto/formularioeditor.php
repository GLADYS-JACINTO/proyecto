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
    <form action="./formularioeditor.php" method="POST" id="formulario">
        <div class="formulario">
            <p id="pn">Registro publicacion</p>
            <div class="grupo">
                <input type="text" name="nombre" id="name" placeholder="Nombre" required autofocus ><span class="barra"></span>
                <label for="">Nombre Publicacion</label>
            </div>
            <div class="grupo">
                <input type="text" name="identificador" value="" id="identifacador" class="hid" placeholder="ide" type="hidden" >
                <br>
                <textarea type="textarea" rows="10" cols="10" name="textarea" class="texare" id="textarea" placeholder="Mensage" required ></textarea><span class="barra"></span>
                <label for="">Mensage publicacion</label>
            </div>
            <button type="submit">Agregar</button>
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
                  $_POST["textarea"]) and 
                  $_POST["nombre"] !="" and 
                  $_POST["textarea"] !=""
        ){
            $nombre = $_POST["nombre"]; 
            $mensage = $_POST["textarea"];
            
            /* Consultas de selección que devuelven un conjunto de resultados */
          $resultado = "Insert into publicacion (Nombre, Mensage) values('$nombre', '$mensage')";    

                if ($mysqli->query($resultado) === TRUE) {
                 
                } else {
                  
                }

        }
    ?>
    
    <!-- <script src="app.js"></script> -->
</body>
</html>