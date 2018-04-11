<?php
    include "Clases/Conexion.php";
    include "Clases/Usuario.php";

    $ObjConexion = new Conexion;
    $ObjUsuario = new Usuario;

    $Conexion = $ObjConexion->Conectar();
    $Datos = $ObjUsuario->Consultar($Conexion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar</title>
</head>
    <body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Editar</h>
            <th>Eliminar</th>
        </tr>
        <?php
            while ($Dato = mysqli_fetch_array($Datos)){
        ?>
        <tr>
            <td><?php echo $Dato['IDUsuario'] ?></td>
            <td><?php echo $Dato['Nombre'] ?></td>
            <td><?php echo $Dato['Correo'] ?></td>
            <td><a href="EditarP.php?ID=<?php echo $Dato['IDUsuario'];?>">Editar</a></td>
            <td><a href="Controlador/EliminarP.php?ID=<?php echo $Dato['IDUsuario'];?>">Eliminar</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <a href="IndexP.php">Inicio</a>
</body>
</html>