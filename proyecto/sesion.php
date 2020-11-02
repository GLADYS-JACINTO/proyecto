<?php
        include "./conexion.php";

        if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
            echo "no te has conectado";
        }else{
            echo "te has conectado <br>";
        }


         $email = $_POST["email"];
            $contrasena = $_POST["contraseña"];

            echo "des form correo = ".$email."<br>";
            echo "des form contraseña = ".$contrasena."<br>";

       
         /* Consultas de selección que devuelven un conjunto de resultados */
           $resultado = $mysqli->query("select * from admin where email ='$email' and contrasena ='$contrasena'");   
                // echo "correcto, se han encontrado en base datos<br> ";
                $fila = $resultado->fetch_assoc();
                
                     echo "des bd obt id = ".$fila['identificador']."<br>"; 
                     echo "des bd obt email = ".$fila['Email']."<br>"; 
                     echo "des bd obt contrasena = ".$fila['Contrasena']."<br>"; 
                     echo "des bd obt usuario = ".$fila['Usuario']."<br>";
                
                                $emailcons = $fila['Email'];
                                $contrasena = $fila['Contrasena'];
                                $usuacons = $fila['Usuario'];
                            
                $admin = "administrador";
                $editor = "editor";
    
       
                
                if(($emailcons == $email) and ($contrasena == $contrasena) and ($usuacons == $admin)){

                     echo "es correcto";
                    
               //usuario y contraseña válidos
               // session_name("logusuadmin");
               
               //asigno un nombre a la sesión para poder guardar diferentes datos
                session_start();
            
                // inicio la sesión
                $vass = $_SESSION["autentificado"]= "Admin";
            
                //defino la sesión que demuestra que el usuario está autorizado
                $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 

                     header("Location: ./principaladmin.php");

                } elseif (($emailcons == $email) and ($contrasena == $contrasena) and ($usuacons == $editor)) {
                    //usuario y contraseña válidos
                //session_name("logusueditor");
               
               //asigno un nombre a la sesión para poder guardar diferentes datos
                session_start();
            
                // inicio la sesión
                 $vass2 = $_SESSION["autentificado"]= "Editor";
            
                //defino la sesión que demuestra que el usuario está autorizado
                $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 
                    
                    header("Location: ./principaleditor.php");
                    
                }else{
                    echo "es un editor incorrecto";
                     header("Location: ./index.php");
                    
                }
                  
/*
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}
*/
                
                
                 
            
            
?>