<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/lk.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head> 
<body>
<header class="header">
    <div class="container">
      <div class="header1">
         <div class="logo">
            <a class="logotext" href="Page_1.html">
              NF<br>
            </a>
            <a class="logotext2" href="Page_1.html">
              NOVA Furniture
            </a>
            <div class="tel"> 
              <a href="tel:+79094501144">+7&nbsp;(909)&nbsp;450-11-44</a>
            </div> 
          </div>
</header>
    <div class="maintext">
        <p>Добро пожаловать,</p>
        <?php
            echo $_SESSION['email'];
        ?>!
    <br><a href="logout.php">Выйти</a> 
    </div>
</body>
</html>