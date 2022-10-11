<?php
require 'data/basedatos.php';
$id = $_GET['id'];
$eliminar = "DELETE FROM `usuarios`  WHERE id = '$id'";
$elimina = $db->query($eliminar);
header("location:usuarios.php");
$conecta->close();
?>
