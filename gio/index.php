<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                            @import url('https://fonts.cdnfonts.com/css/el-salvador01');
</style>
                
<style>
                            @import url('https://fonts.cdnfonts.com/css/of-maids-and-men');
</style>
                 
                
                
                </head>
<body>
    <style>
        body{
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            margin-left:600px;
            justify-content: center;
            align-items: center;
            height: 600px;
            background-repeat:no-repeat;
            background-image:url("https://wallpapers.com/images/hd/demon-slayer-3840-x-2106-background-edkl3qdg798txkxz.jpgg");
            background-size:cover;
        }
        .container{
            background-color: #000;
            padding: 5px;
            border-radius: center;
            font-size:20px;
            box-shadow:0 0 2px rgb(184, 7, 253);
            text-align: center;
            font-family: 'Of Maids and Men', sans-serif;
                                                
        }
        h1{
            text-align: center;
            color: #FE00CB;
            margin-bottom: center;
            font-size:30px;

        }
        label{
            font-weight: bold;
            color: #A49EA3;
            margin-bottom: center;
            display: block;
            text-align: center;
            font-family: 'El Salvador01', sans-serif;            
            font-size:15px;

                                                

        }
        input{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
       button{
        background-color: #686768;
        font-family: 'LINEMAS', sans-serif;                                                
color:white;
            padding: 10px;
            border-radius: center;
            font-size:10px;
            box-shadow:0 0 2px rgb(184, 7, 253);
            text-align: center;

       }
    </style>
  
    <div class="container">
        <h1>Introduce Personajes</h1>
        <form action="guardar-datos.php"method="post">
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
            <div class="button">
                <button type="submit">Guardar</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>

    </div>
</body>
</html>


