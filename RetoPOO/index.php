<?php include 'Controlador/ControladorBiblioteca.php' ?>
<?php include 'Controlador/ControladorLibro.php' ?>
<?php include 'Controlador/ControladorAutor.php' ?>
<?php
    $objBiblioteca = new Biblioteca();
    
    $autor1 = new Autor('Denilson', 'Test@gmail.com', 'NT');
    $autor2 = new Autor('Sebas', 'Test@gmail.com', 'NT');
    $autor3 = new Autor('Daniel', 'Test@gmail.com', 'NT');
    $autor4 = new Autor('Esteban', 'Test@gmail.com', 'NT');
    $autor5 = new Autor('Test', 'Test@gmail.com', 'NT');
    
    $libro1 = new Libro('Cien años de soledad', 200, 10);
    $libro2 = new Libro('Nacho lee', 50, 100);
    $libro3 = new Libro('Test', 10, 10);

    $libro1->agregarAutor($autor1);
    $libro1->agregarAutor($autor3);
    $libro1->agregarAutor($autor5);

    $libro2->agregarAutor($autor2);
    $libro2->agregarAutor($autor4);

    $libro3->agregarAutor($autor5);

    $objBiblioteca->agregarLibro($libro1);
    $objBiblioteca->agregarLibro($libro2);
    $objBiblioteca->agregarLibro($libro3);

    // print($objBiblioteca->_get());
    // echo "</br>";
    // //print_r($objBiblioteca->buscarLibroAutor('Test'));
    // echo "</br>";
    // //print_r($objBiblioteca->buscarLibroNombre('Nacho'));
    // echo "</br>";
    // //echo($objBiblioteca->stockTotal());
    // echo "</br>";
    // //echo($objBiblioteca->valorTotalStock());
    // $libro1->borrarAutor($autor1);
    // print($objBiblioteca->_get());
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Reto POO</title>
  </head>
  <body>
    <h1 class="text-center">Reto POO</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

  </body>
</html>