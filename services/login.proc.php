<?php
    include 'connection.php';

    if (isset($_POST['email'])) {
        //echo md5($_POST['passwd']);
        $email=$_POST['email'];
        $passwd=md5($_POST['passwd']);
        $query='SELECT * FROM tbl_user WHERE email="'.$email.'" AND passwd="'.$passwd.'"';
        $result=mysqli_uery($conn,$query);

        while ($row = mysqli_fetch_array($result)) {
            # code...
        }
    }else {
        header('location:../index.php');
    }
?>