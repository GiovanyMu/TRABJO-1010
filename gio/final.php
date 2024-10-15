<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <style>
                            @import url('https://fonts.cdnfonts.com/css/mdma');
</style>
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color:#333;
            color:#fff;
            font-family: 'MDMA', sans-serif;
            margin:0;
            padding:0;

        }
        h1{
            color:#000;
        }
        #formulario{
            background-color:#565656;
            padding:20px;
            border-radius:10px;
            margin: 20px;;
        }
        #formulario label{
            display:block;
            margin-bottom:10px;
            color#000;
        }
        #formulario input[type="text"]{
            width: 50%;
            padding:10px;
            margin-bottom:20px;
            border:1px solid #fff;
            border-radius:5px;
            background-color:#fff;
            color:#333;

        }
    </style>
    <script>
        $(document).ready(function() {
            function actualizarDatos(){
                $.get(mostrar-datos2.php,function(data){
                $("resultados").html(data);
                });
            }
        
        $("formulario").submit(function(event){
            event.preventDefault();
            $.post("insertandonuevo.php",$(this).serialize(),function(data){
                $("mensaje").html(data);
                actualizarDatos();
                $("#fomulario")[0].reset;
            });
        });
        });
    
    </script>
     <form id="formulario">
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="Nombre"required>
            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido"required>
            <label for="Genero">Genero:</label>
            <input type="text" id="Genero" name="Genero"required>
            <label for="Edad">Edad:</label>
            <input type="text" id="Edad" name="Edad"required>
            <label for="Rango">Rango:</label>
            <input type="text" id="Rango" name="Rango"required>
            <label for="Respiracion">Respiracion:</label>
            <input type="text" id="Respiracion" name="Respiracion"required>
            <label for="Color_katana">Color_katana:</label>
            <input type="text" id="Color_katana" name="Color_katana"required>
            <label for="Debilidad">Debilidad:</label>
            <input type="text" id="Debilidad" name="Debilidad"required>
            <br><input type="submit" value="Agregar registro">
                    <div id="mensaje"></div><!--Mensaje de exito o error-->
        <div id="resultados"></div><!--Mostrar datos actualizados-->
        </form>
</body>
</html>