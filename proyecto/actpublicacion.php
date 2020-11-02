<?php
 include "./conexion.php";
            
            $identra = $_POST["iden"]; 
            $nombre = $_POST["nombre"]; 
            $mensage = $_POST["textarea"]; 

          /* Actualiza el conjunto de registros */
          $resultado = "UPDATE publicacion SET Nombre = '$nombre', Mensage = '$mensage' WHERE identificador = '$identra'";    
                
                if ($mysqli->query($resultado) === TRUE) {
                     header("Location: ./formactaeditor.php");
                } else {
                    header("Location: ./formulariopublicacionreg.php");
                }

?>













