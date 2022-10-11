<?php
require "data/basedatos.php";
$sql = "SELECT * FROM `departamentos`";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1>Listado de departamentos</h1>
        <a href="nuevo_departamento.php" class="btn btn-secondary">Nuevo</a>
        <a href="index.php" class="btn btn-secondary">Regresar</a>
        <tr>
        <table class="table">
            <thead>
                <tr>
                    <th>id </th>
                    <th>titulo</th>
                    <th>precio </th>
                    <th>descripcion</th>
                    <th>habitaciones</th>
                    <th>estacionamiento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($departamentos = $resultado->fetch_assoc()):
                ?>
                       <tr>
                        <td><?php echo $departamentos['id'] ?></td>
                        <td><?php echo $departamentos['titulo'] ?></td>
                        <td><?php echo $departamentos['precio'] ?></td>
                        <td><?php echo $departamentos['descripcion'] ?></td>
                        <td><?php echo $departamentos['habitaciones'] ?></td>
                        <td><?php echo $departamentos['estacionamiento'] ?></td>
                        <td>
                    
                        <a href="eliminar_doctores.php?id=<?php echo $departamentos['id'] ?>" class="btn btn-danger">Eliminar</a>
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










