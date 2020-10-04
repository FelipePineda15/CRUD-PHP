<?php
    include "../Clases/Conexion.php";
    include "../Clases/Usuario.php";

    $ObjConexion = new Conexion;
    $Conexion = $ObjConexion->Connect();
    
    $ObjUsuario = new Usuario;
    $Datos = $ObjUsuario->Consultar($Conexion);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/AteneaHelmet.ico" /><title>ProjectMann</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/cb1e958e59.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/Formato.css">
    </head>
    <body>
        <p><img class="atenea-helmet" src="img/AteneaHelmet.png"><aside class="projectman-title"> ProjectMann </aside></p>
        <table class="login">
            <tr>
                <th class="login-input">
                    ID
                </th>
                <th class="login-input">
                    Nombre
                </th>
                <th class="login-input">
                    Apellido
                </th>
                <th class="login-input">
                    Correo
                </th>
                <th></th>
                <th></th>
            </tr>
            <?php
                while ($Dato = mysqli_fetch_array($Datos)){
            ?>
            <tr>
                <td class="login-input">
                    <?php echo $Dato['idUsuario'] ?>
                </td>
                <td class="login-input">
                    <?php echo $Dato['nombre'] ?>
                </td>
                <td class="login-input">
                    <?php echo $Dato['apellido'] ?>
                </td>
                <td class="login-input">
                    <?php echo $Dato['correo'] ?>
                </td>
                <td class="login-input">
                    <a class="fas fa-edit" style="color: #00D495;" href="edit.php?idUsuario=<?php echo $Dato['idUsuario'];?>" ></a>
                </td>
                <td class="login-input">
                    <a  class="fas fa-trash-alt" style="color: #FF316D;" href="Controlador/Eliminar.php?idUsuario=<?php echo $Dato['idUsuario'];?>" ></a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <form class="login">
            <p>
                <button class="cancel-button" formaction="index.php" >Volver</button>
            </p>
        </form>
    </body>
</html>