<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud_mysql'
);

// *******************Comprobacion de conexion a la BD*********************
// if(isset($conn)){
//     echo'DB is connected';
// }

?>