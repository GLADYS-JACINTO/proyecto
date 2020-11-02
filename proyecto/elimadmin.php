<?php
include "./conexion.php";
            
            $identra = $_POST["tipousuario"]; 

          /* Actualiza el conjunto de registros */
          $resultado = "delete from admin where identificador = $identra";    
                
                if ($mysqli->query($resultado) === TRUE) {
                     header("Location: ./eliminaradmin.php");
                } else {
                   
                }

?>













