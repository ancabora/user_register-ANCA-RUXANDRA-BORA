<?php
include '../db/conexion-db.php';
$sql = file_get_contents('../sql/users_list.sql');
$resultado = $conexion -> query($sql);
while($fila=$resultado -> fetch_assoc()){
     $filas[]= $fila;
}
//var_dump($filas);
include '../vistas/users_list_vista.php';
