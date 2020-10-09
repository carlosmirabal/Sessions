<?php
    include 'connection.php';

    // Comprobaoms si envia datos o no.
    if (isset($_POST['email'])) {
        //echo md5($_POST['passwd']);
        $email=$_POST['email'];
        $passwd=md5($_POST['passwd']);
        $query='SELECT * FROM tbl_user WHERE email="'.$email.'" AND passwd="'.$passwd.'"';
        $result=mysqli_query($conn,$query);

        // El usuario existe y la contraseña es correcta
        if (mysqli_num_rows($result)==1) {
            $row = mysqli_fetch_array($result);
            session_start();
            $SESSION['email']=$row['email'];
            $SESSION['id']=$row['id_user'];
            header('location:../view/home.php');
        }else {
            header('location:../index.php');
        }
        
    }else {
        header('location:../index.php');
    }
?>