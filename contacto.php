<!--// V 0.1 original -->
<!--// Autor: Correangel--><!--// Autor: Angel Correa  -->
<!--// Derechos de autor  -->

<?php

    $usuario = "root"; //en este caso root por ser localhost
    $password = "12345";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="contacto"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $correo=$_POST['correo']; //name="correo"
    $mensaje=$_POST['mensaje']; //name="mensaje"

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$correo','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';////si algo sale mal mandanos este mensaje
         echo "<script>location.href='index.html#Contactar'</script>";	
    }else{
        echo '<script>alert("Datos guardado correctamente ")</script> ';//si todo sale bien mandanos este mensaje
        
        echo "<script>location.href='index.html#Contactar'</script>";	
    }
     
?>﻿