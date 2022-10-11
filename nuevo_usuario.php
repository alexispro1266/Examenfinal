<?php 
require 'data/basedatos.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO `usuarios` (`id`,`nombre`,`username`,`password`,`estado`) 
            VALUES ('$id','$nombre','$username','$password','$estado')";
    $resultado = $db->query($sql);
    if($resultado){
        header('location:usuarios.php');
    }
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Nuevo Usuario</h1>
        <form method="POST">

        <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" name="id" id="id" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">`Username`:</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control">
            </div>

            <input type="submit" value="Grabar" class="btn btn-primary">
        </form>

    </div>
</body>

</html>
















