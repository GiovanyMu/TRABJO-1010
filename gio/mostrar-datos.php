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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos de la base de datos</title>
    <style>
                            @import url('https://fonts.cdnfonts.com/css/mdma');
</style>
<style>
                            @import url('https://fonts.cdnfonts.com/css/sf-willamette');
</style>
                     
                
                
</head>
<body>
    <style>
        body{
            font-family: 'SF Willamette', sans-serif;
            font-family: 'SF Willamette Extended', sans-serif;
            color: black;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items:center;
            height: 100px;
            text-align: center;
            font-size:10px;


        }
        h1{
            text-align: center;
            color:black;
            margin-bottom: 20px;
            font-family: 'MDMA', sans-serif;
            font-size:50px;
            margin-top:150px;                                                
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:50px;
            border-radius:50px;
        }
        th, td{
            padding:10px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }
        tr:nth-child(even){
            background-color:#FAFAFA;
            color:black;
        }
        tr:nth-child(odd){
            background-color:#B7B7B8;
            color:black;
        }
        th{
            background-color:#A807FF;
            color:black;
        }
      
    </style>
    <div class="container">
        <h1>Datos de Demon Slayer</h1>
       <?php

       if($resultado->num_rows >0):?>
       <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
            <th>Edad</th>
            <th>Rango</th>
            <th>Respiracion</th>
            <th>Color_katana</th>
            <th>Debilidad</th>

     
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()):?>
            <tr>
                <td><?php echo $fila['Nombre'];?></td>
                <td><?php echo $fila['Apellido'];?></td>
                <td><?php echo $fila['Genero'];?></td>
                <td><?php echo $fila['Edad'];?></td>
                <td><?php echo $fila['Rango'];?></td>
                <td><?php echo $fila['Respiracion'];?></td>
                <td><?php echo $fila['Color_katana'];?></td>
                <td><?php echo $fila['Debilidad'];?></td>


            </tr>
            <?php endwhile;?>
       </table>
       <?php else: ?>
        <p>No hay personajes en la base de datos</p>
        <?php endif;?>
    </div>
</body>
</html>
