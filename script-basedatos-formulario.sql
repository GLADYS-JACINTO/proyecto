CREATE database formulario;

use formulario;

Create table admin(
identificador int auto_increment primary key not null ,
Nombre varchar(50) not null,
Apellidos varchar(100) not null,
Email varchar(90) not null,
Telefono varchar(20) not null,
Contrasena varchar(255) not null,
Usuario varchar(100)not null
);

create table publicacion(
identificador int auto_increment primary key not null ,
Nombre varchar(50) not null,
Mensage text not null
);

Insert into admin values("1", "juan", "hernandez rojas","test@hotmail.com","9584734743","test","administrador");
Insert into admin values("2", "alejandro", "gomez perez","admin@hotmail.com","9584734743","admin","administrador");
Insert into admin values( '3',"adriana", "perez santos","admin2@hotmail.com","9584734743","admin2","editor");
Insert into admin values("4", "adriana", "perez santos","admin2@hotmail.com","9584734743","admin2","administrador");

INSERT INTO admin (Nombre, Apellidos, Email, Telefono, Contrasena, Usuario) 
           VALUES ('Leslie', 'perez reyes','lesli@hotmail.com','7484849444','lesli','administrador');
           
 UPDATE admin SET Nombre = 'Jose', Apellidos = 'Santos Santos', Email = 'Jose@gmail.com', Telefono = '7585857474', Contrasena = 'Josemail', Usuario = 'editor' WHERE identificador = '1';           
           
           
select * from admin;

select * from admin where identificador = "2";

drop database formulario;


select  email, contraseña FROM admin where email ="test@hotmail.com" and contrasena ="test";
select  email, contrasena from admin where email ="test@hotmail.com";

Insert into publicacion (Nombre, Mensage) values('nombre', 'mensage');

select * from publicacion;


