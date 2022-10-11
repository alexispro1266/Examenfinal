<?php
$db = new mysqli('localhost','cursos', 'alexis1266', 'inmobiliaria');
if(!$db){
    echo 'Error al conectra la Base de datos';
    exit;
}