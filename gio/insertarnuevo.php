<?php
        $username="root";
        $password="";
        $servername="localhost";
        $database="gio";

        //crear conexion
        $conexion = new mysqli($servername,$username,$password,$database);

        //verificar la conexion
        if($conexion->connect_error){
            die("La conexion en la base de datos fallo: " . $conexion->connect_error);

        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $Nombre = $POST["Nombre"];
            $Apellido = $POST["Apellido"];
            $Genero = $POST["Genero"];
            $Edad = $POST["Edad"];
            $Rango = $POST["Rango"];
            $Respiracion = $POST["Respiracion"];
            $Color_katana = $POST["Color_katana"];
            $Debilidad = $POST["Debilidad"];

        }
        ?>