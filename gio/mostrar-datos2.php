<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
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
        $sql="SELECT * FROM slayer";
        $resultado = $conexion -> query($sql);

        if($resultado->num_rows >0){
            echo "<table>";
            echo"<tr><th>Nombre</th><th>Apellido</th><th>Genero</th><th>Edad</th><th>Rango</th><th>Respiracion</th><th>Color_katana</th><th>Debilidad</th></tr>";
            while($row= $resultado ->fetch_assoc()){
                echo "<tr><td>" . $row["id"] . "</tr></td>". "<tr><td>" . $row["Nombre"] . "</tr></td>"."<tr><td>" . $row["Apellido"] . "</tr></td>". "<tr><td>" . $row["Genero"] . "</tr></td>". "<tr><td>" . $row["Edad"] . "</tr></td>". "<tr><td>" . $row["Rango"] . "</tr></td>"."<tr><td>" . $row["Respiracion"] . "</tr></td>" . $row["Color_katana"] . "</tr></td>". $row["Debilidad"] . "</tr></td>";
            }
            echo "</table>";
        }else{
            echo "No se encontraron registros en la base de datos";
        }
        $conexion->close();
?>
</div>
</body>
</html>
