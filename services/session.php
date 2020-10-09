<?php 
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:../index.php');
    }
    echo '<h2>Bienvenido '.$_SESSION['email'].'</h2>';
    echo '<a href="../services/logout.proc.php">Cerrar sesión</a>';
?>