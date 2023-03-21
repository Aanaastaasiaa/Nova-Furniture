<?php
    require_once "connect.php";

    if (isset($_POST['fullname1'], $_POST['email1'], $_POST['password1']))
    {
        $full_name=$_POST['fullname1'];   
        $email=$_POST['email1'];
        $password=$_POST['password1'];
    }
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES ('', '$full_name', '$email', '$password')");
    header('Location: page_8.php');
?>
 