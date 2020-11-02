<?php
 include "./conexion.php";
            
            $identra = $_POST["identificador"]; 
            $nombre = $_POST["nombre"]; 
            $apellido = $_POST["apellidos"]; 
            $email = $_POST["email"]; 
            $telefono = $_POST["telefono"]; 
            $contrasena = $_POST["contrasena"]; 
            $tipousuario = $_POST["tipousuario"];

          /* Actualiza el conjunto de registros */
          $resultado = "UPDATE admin SET Nombre = '$nombre', Apellidos = '$apellido', Email = '$email', Telefono = '$telefono', Contrasena = '$contrasena', Usuario = '$tipousuario' WHERE identificador = '$identra'";    
                

                if ($mysqli->query($resultado) === TRUE) {
                     header("Location: ./formactadmin.php");
                } else {
                    header("Location: ./formularioadminreg.php");
                }
?>













