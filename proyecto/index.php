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
    <div id="formulario">
    <form action="./sesion.php" method="POST" id="form">
        <div class="form">
            <h1>Inicia sesion</h1>
            <!-- </div> -->
            <div class="grupo">
                <input type="email" name="email" id="email2" required ><span class="barra"></span>
                <label for="">Email</label>
            </div>
            <div class="grupo">
                <input type="password" name="contraseña" id="password2" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <button type="submit">Ingresar</button>
            <!-- <button id="demo" type="submit" >test</button> --->
            <!-- <p id="demo" onclick="myFunction()">Click me to change my text color.</p>--->
            <p class="warnings" id="warnings"></p>
            <!-- <imput type="submit" value ="Login" class="boton">--->
            <!-- <p>¿No tienes cuenta?<a class="link"href="loginven.html">Registrate aqui</a></p>-->
        </div>
    </form>
    <!--<script src="apploginok.js"></script> -->
</body>
</html>