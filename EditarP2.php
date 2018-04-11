<?php
    include './Clases/ConexionP.php';
    include './Clases/UsuarioP.php';
    
    $ObjConexion = new Conexion();
    $ObjUsuario = new Usuario();
    
    $Conexion = $ObjConexion->Conectar();
    $ID = $_GET['ID'];
    $Datos = $ObjUsuario->ConsultarID($Conexion, $ID);
    
    $Nombre;
    $Apellido;
    $Fecha_Nacimiento;
    $Telefono;
    $Celular;
    $Email;
    
    while ($row = mysqli_fetch_array($Datos)){
        $Nombre = $row['Nombre'];
        $Apellido = $row['Apellido'];
        $Fecha_Nacimiento = $row['Fecha_Nacimiento'];
        $Telefono = $row['Telefono'];
        $Celular = $row['Celular'];
        $Email = $row['Email'];
    }
?>
<!DOCTYPE html>

<html>
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
        <p class="a">Editar Usuario</p> 
        <form action="Controlador/EditarP.php" method="post" align="center">
            <input name="ID" type="hidden" value="<?php echo $ID ; ?>">
            <label>Nombre: </label><input type="text" name="Nombre" value="<?php echo $Nombre; ?>"><br><br>
            <label>Apellido: </label><input type="text" name="Apellido" value="<?php echo $Apellido; ?>"><br><br>
            <label>Fecha de Nacimiento: </label><input type="text" name="Fecha_Nacimiento" value="<?php echo $Fecha_Nacimiento; ?>"><br><br>
            <label>Telefono: </label><input type="text" name="Telefono" value="<?php echo $Telefono; ?>"><br><br>
            <label>Celular: </label><input type="text" name="Celular" value="<?php echo $Celular; ?>"><br><br>
            <label>Email: </label><input type="text" name="Email" value="<?php echo $Email; ?>"><br><br>
            <input type="submit" value="Modificar">
        </form>
        <?php
        ?>
    </body>
</html>
