<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
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
        <form action="../Controlador/Create.php" method="post" class="login">
            <p>
                <input class="login-input" placeholder="Nombre" type="text" name="name" >
            </p>
            <p>
                <input class="login-input" placeholder="Apellido" type="text" name="surname" >
            </p>
            <p>
                <input class="login-input" placeholder="Correo" type="email" name="email" >
            </p>
            <p>
                <input type="password" class="login-input" placeholder="Contraseña" name="password" >
            </p>
            <p>
                <select name="cargoId" class="login-input" placeholder="Cargo">
                    <option value="1">Administrador</option>
                    <option value="2">Desarrollador</option>
                    <option value="3">Comercial</option>
                </select>
            </p>
            <p>
                <input class="login-button" type="submit" value="Crear">
            </p>
            <p>
                <button class="cancel-button" formaction="index.php" >Volver</button>
            </p>
        </form>
    </body>
</html>
