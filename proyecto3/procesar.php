<?php

    include_once __DIR__ . "/conexion_sqlite.php";
    //configuramos zona horaria
    date_default_timezone_set('America/Bogota');
    //validamos que se precione el boton
    if(isset($_POST['btnRegistrarse'])){
        //obtenermos los datos

        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $departamento = $_POST['departamento'];
        $ciudad = $_POST['ciudad'];

        //Variable para validar correos
        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

        // if(isset($cedula)){
        if(empty($cedula) || empty($nombre) || empty($telefono) || empty($email) || preg_match($regex, $email) || empty($direccion) || 
            empty($departamento) || empty($ciudad)){

            $error = "todos los campos son obligatorios";
            header('Location: index.php?error='.urldecode($error));
        }else{
            $query = "SELECT * FROM registros WHERE cedula = :cedula";
            $stmt = $baseDatos->prepare($query);
            $stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
            $resultado = $stmt->execute();

            $registroCedula = $stmt->fetch(PDO::FETCH_ASSOC);

            if($registroCedula){
                $error = "el numero de cedula ya se encuentra registrado";
                header('Location: index.php?error='.urldecode($error));
            }else{
                $query = "INSERT INTO registros(cedula, nombre, telefono, email, direccion, departamento, ciudad) 
                            VALUES(:cedula, :nombre, :telefono, :email, :direccion, :departamento, :ciudad)";
                $stmt = $baseDatos->prepare($query);
                $stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
                $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
                $stmt->bindParam(":telefono", $telefono, PDO::PARAM_STR);
                $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                $stmt->bindParam(":direccion", $direccion, PDO::PARAM_STR);
                $stmt->bindParam(":departamento", $departamento, PDO::PARAM_STR);
                $stmt->bindParam(":ciudad", $ciudad, PDO::PARAM_STR);
                $resultado = $stmt->execute();

                if ($resultado) {
                    $codigoId = $baseDatos->lastInsertId();
                    $mensaje = "Registro creado correctamente";
                    header('Location: index.php?mensaje='.urldecode($mensaje).'&codigo='.urldecode($codigoId));
                    exit();
                }else{
                    $error = "No se pudo registrar el usuario";
                    header('Location: index.php?error'.urldecode($error));
                    exit();
                }
                
            }
        }
    }

?>
