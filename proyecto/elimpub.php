<?php
 include "./conexion.php";
            
            $identra = $_POST["publicacion"]; 

          /* Actualiza el conjunto de registros */
          $resultado = "delete from publicacion where identificador = $identra";    
                
                if ($mysqli->query($resultado) === TRUE) {
                     header("Location: ./eliminareditor.php");
                } else {
                    header("Location: ./eliminareditor.php");
                }

?>













