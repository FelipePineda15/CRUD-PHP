<?php
    include './Clases/Conexion.php';
    include './Clases/Usuario.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Conectar();
    $ID = $_GET['ID'];
    $Datos = $ObjUsuario->ConsultarID($Conexion, $ID);
    
    $Nombre;
    $Correo;
    while ($row = mysqli_fetch_array($Datos)){
        $Nombre = $row['Nombre'];
        $Correo = $row['Correo'];
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Editar Usuario</h3> 
        <form action="Controlador/EditarP.php" method="post">
            <input name="ID" type="hidden" value="<?php echo $ID ; ?>">
            <label>Nombre: </label><input type="text" name="Nombre" value="<?php echo $Nombre; ?>"><br><br>
            <label>Correo: </label><input type="text" name="Email" value="<?php echo $Correo; ?>"><br><br>
            <input type="submit" value="Modificar">
        </form>
        <?php
        ?>
    </body>
</html>
