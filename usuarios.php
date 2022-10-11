<?php
require "data/basedatos.php";
$sql = "SELECT * FROM `usuarios`";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>Listado de Usuarios</h1>
        <a href="nuevo_usuario.php" class="btn btn-secondary">Nuevo</a>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
        <tr>
        <table class="table">
            <thead>
                <tr>
                    <th>`id` </th>
                    <th>`nombre` </th>
                    <th>`username` </th>
                    <th>`password` </th>
                    <th>`estado` </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($usuarios = $resultado->fetch_assoc()):
                ?>
                       <tr>
                        <td><?php echo $usuarios['id'] ?></td>
                        <td><?php echo $usuarios['nombre'] ?></td>
                        <td><?php echo $usuarios['username'] ?></td>
                        <td><?php echo $usuarios['password'] ?></td>
                        <td><?php echo $usuarios['estado'] ?></td>
                        <td>
                    
                        <a href="eliminar_usuarios.php?id=<?php echo $usuarios['id'] ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                        </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>










