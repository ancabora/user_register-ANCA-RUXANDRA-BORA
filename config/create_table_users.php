<?php 
include '../db/conexion-db.php';
$sql = file_get_contents('../sql/create_table_users.sql');
$resultado = $conexion->multi_query($sql);
if ($resultado){
    echo 'Aplicacion instalada con éxito';
}else{
    echo 'Ha ocurrido un error';
}