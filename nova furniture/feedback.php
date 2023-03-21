<?php
    require_once "connect.php";

    if (isset($_POST['fname'], $_POST['sname'], $_POST['phonenum'], $_POST['question']))
    {  
        $fname=$_POST['fname'];
        $sname=$_POST['sname'];
        $number=$_POST['phonenum'];
        $question=$_POST['question'];
    }
        mysqli_query($connect, "INSERT INTO `feedback` (`id`, `Fname`, `Sname`, `Phone_num`, `Reason`) VALUES ('', '$fname', '$sname', '$number', '$question')");
        header('Location: page_6.php');
?>