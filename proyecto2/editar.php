<?php
    include  'conexion.php';
    //obtener id del registro a editar
    $idResgistro = $_GET['id'];

    //queery para optener info del usuario
    $query = "SELECT * FROM usuario WHERE id = '".$idResgistro."'";
    $usuario = mysqli_query($con, $query) or die (mysqli_error());
    $fila = mysqli_fetch_assoc($usuario);

    if(isset($_POST['editarRegistro'])){
        $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
        $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
        $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        date_default_timezone_set('America/Bogota');
        $time = date('h:i:s a', time());

        if(!isset($nombre) || !isset($apellido) || !isset($telefono) || !isset($email) || $nombre == '' || 
        $apellido == '' || $telefono == '' || $email == ''){
            $error = "Todos los campos son obligatorios";
        }else{
            $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono',
            email = '$email' WHERE id = '$idResgistro'";

            if (!mysqli_query($con, $query)) {
                die('Error: ' . mysqli_error($con));
                $error = "No se pudo editar el registro";
            }else{
                $mensaje = "Registro editado correctamente";
                header('Location: index.php?mensaje='.urldecode($mensaje));
                exit();
            }       
        }
    }
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="css/estilos.css" rel="stylesheet">

    <title>CRUD PHP Y MYSQL</title>
  </head>
  <body>
    <h1 class="text-center">CRUD PHP Y MYSQL</h1>
    <p class="text-center">Aprende a realizar las 4 operaciones básicas entre PHP y una base de datos, en este caso MYSQL: CRUD(Create, Read, Update, Delete)</p>

    <div class="container">

    <div class="row">
        <h4>Editar un Registro Existente</h4>
    </div>
        <div class="row caja">
            <?php if(isset($error)) : ?>
                <h4 class="bg-danger text-white"><?php echo $error; ?></h4>
            <?php endif; ?>
            <div class="col-sm-6 offset-3">
                <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" value="<?php echo $fila['nombre']; ?>">                    
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Ingresa los apellidos" value="<?php echo $fila['apellido']; ?>">                    
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="number" class="form-control" name="telefono" placeholder="Ingresa el teléfono" value="<?php echo $fila['telefono']; ?>">                    
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Ingresa el email" value="<?php echo $fila['email']; ?>">                    
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="editarRegistro">Editar Registro</button>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>