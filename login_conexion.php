<?php
/*--------------------------------------------------------------CLASE--------------------------------------------------------*/
    /*$host  =  "localhost";
    $user  =  "root";
    $pass  =  "";
    $db    =  "universidad";

    $conexion = mysqli_connect($host, $user, $pass, $db);*/
    
/*--------------------------------------------------------------WEBHOST--------------------------------------------------------*/
    
//database: id20310606_registro
//user: id20310606_id217212_registro
//host: localhost
//password: ID217212_registro

    $conexion = new mysqli("localhost", "id20310606_id217212_registro", "ID217212_registro", "id20310606_registro");

    if(!$conexion){
        echo "fallo la conexion";
    }
?>