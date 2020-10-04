<?php
    include '../Clases/Conexion.php';
    include '../Clases/Usuario.php';
    
    $ObjConexion = new Conexion;
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Connect();
    $idUsuario = $_GET['idUsuario'];
    $datos = $ObjUsuario->ConsultarID($Conexion, $idUsuario);
    
    $name;
    $surname;
    $email;
    $password;
    $cargoId;

    while ($row = mysqli_fetch_array($datos)){
        $name = $row['name'];
        $surname = $row['surname'];
        $email = $row['email'];
        $password = $row['password'];
        $idCargo = $row['idCargo'];

    }
?>
<!DOCTYPE html>

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
        <form action="../Controlador/Editar.php" method="post" class="login">
            <p>
                <input name="idUsuario" type="hidden" value="<?php echo $idUsuario ; ?>">
            </p>
            <p>
                <input class="login-input" placeholder="Nombre" type="text" name="name" value="<?php echo $name; ?>">
            </p>
            <p>
                <input class="login-input" placeholder="Apellido" type="text" name="surname" value="<?php echo $surname; ?>">
            </p>
            <p>
                <input class="login-input" placeholder="Correo" type="text" name="email" value="<?php echo $email; ?>">
            </p>
            <p>
                <input class="login-input" placeholder="Contraseña" type="password" name="password" value="<?php echo $password; ?>">
            </p>
            <p>
                <select name="idCargo" class="login-input" placeholder="Cargo">
                    <option value="1">Administrador</option>
                    <option value="2">Desarrollador</option>
                    <option value="3">Comercial</option>
                </select>
            </p>
            <p>
                <input class="login-button" type="submit" value="Modificar">
            </p>
            <p>
                <button class="cancel-button" formaction="index.php" >Volver</button>
            </p>
        </form>
        <?php
        ?>
    </body>
</html>
