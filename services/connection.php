<?php 
    //ESTILO POR PROCEDIMIENTOS
    
    $host="localhost";
    $user="root";
    $pass="";
    $db="gd_login";

    //Crear la conexión
    $conn=mysqli_connect($host,$user,$pass,$db);

    // Chevkear la coneción
    if (!$conn) {
        echo "Error: Nbo se puede conectar a MySQL." . PHP_EOL;
        echo "Error: de depuraciópn " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }else {
        mysqli_set_charset($conn, "utf8");
    }
?>