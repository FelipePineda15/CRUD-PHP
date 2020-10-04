
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="shortcut icon" href="img/AteneaHelmet.ico" /><title>ProjectMann</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/Formato.css">
    </head>
    <body>
        <p><img class="atenea-helmet" src="img/AteneaHelmet.png"><aside class="projectman-title"> ProjectMann </aside></p>
        <form action="../Controlador/Eliminar.php" method="get" class="login">
            <p>
                <input type="text" class="login-input" name="idUsuario" placeholder="ID del Usuario">
            </p>
            <p>
                <input class="login-button" type="submit" value="Eliminar">
            </p>
            <p>
                <button class="cancel-button" formaction="index.php" >Volver</button>
            </p>
        </form>
    </body>
</html>
