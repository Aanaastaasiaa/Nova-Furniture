<?php
    session_start();

    require_once "connect.php";

    if (isset($_POST['email'], $_POST['password']))
    {  
        $email=$_POST['email'];
        $password=$_POST['password'];
    }

    $check_user=mysqli_query($connect, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    echo mysqli_num_rows($check_user);

    if (mysqli_num_rows($check_user)>0){
        $_SESSION['email']=$email;
        header('Location: lk.php');
    
    } else {
        $_SESSION['message']='Не верный логин или пароль';
        header('Location: page_8.php');
    } 
?>