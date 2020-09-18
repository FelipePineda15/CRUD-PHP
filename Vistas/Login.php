<?php
include '../Clases/Base.php';

$ObjBase = new Base();

$Conexion = $ObjBase->Conectar();

$Datos = $ObjBase->Login($_POST['Usuario'], $_POST['Password'], $Conexion);

if ($Datos) {
    $Rol = $ObjBase->VerificarCargo($_POST['Usuario'], $_POST ['Password'], $Conexion);
    if ($Rol == 1) {
        echo '¡Bienvenido Administrador!<br><br>';
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Latin Sport F.C/Consultar</title>
        <link rel="alternate" type="application/rss+xml" title="Latin Sport F.C – Escuela de Fútbol » Feed">
        <link rel="alternate" type="application/rss+xml" title="Latin Sport F.C – Escuela de Fútbol » RSS de los comentarios">
        <script src="http://www.futbolbogotano.com/wp-content/uploads/2017/10/logo-2014-copia-ESC.-DEP.-LATIN-SPORT-FC.jpg" type="text/javascript"
            defer=""></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Formato.css">
        </head>
            <body>
                <form action="ConsultarP.php" method="post">
                    <input type="submit" value="Continuar">
                    <?php
                } else if ($Rol == 2) {
                    echo 'Los Funcionarios no tienen los permisos suficientes  para ingresar a la plataforma<br><br>';
                    ?>
                    <a href="Administrador.html">Volver</a>  
                </form>
            </body>
        </html>
        <?php
    } else {
    echo 'Problema con los datos de acceso';
    header('Location: Error.html');
    }
} 