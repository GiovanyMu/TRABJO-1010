<?php
$username="root";
$password="";
$servername="localhost";
$database="gio";

//crear conexion
$conexion = new mysqli($servername,$username,$password,$database);

//verificar la conexion
if($conexion->connect_error){
    die("conexion fallida: " . $conexion->connect_error);
    }
    //obtencion de los datos del formulario
   $Nombre = $_POST['Nombre'];
   $Apellido = $_POST['Apellido'];
   $Genero = $_POST['Genero'];
   $Edad = $_POST['Edad'];
   $Rango = $_POST['Rango'];
   $Respiracion = $_POST['Respiracion'];
   $Color_katana = $_POST['Color_katana'];
   $Debilidad = $_POST['Debilidad'];

   $sql = "INSERT INTO slayer(Nombre,Apellido,Genero,Edad,Rango,Respiracion,Color_katana,Debilidad)VALUES 
   ('$Nombre', '$Apellido', '$Genero', '$Edad','$Rango','$Respiracion','$Color_katana','$Debilidad')";
   if($conexion->query($sql)===TRUE){
    echo "Datos guardados sadisfactoriamenete";
   }else{
    echo "ERROR: " . $sql . "<br>" . $conexion->error;
   }
   $conexion->close();
    ?>
