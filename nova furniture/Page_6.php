
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/Header_Footer.css">
    <link rel="stylesheet" href="css/CSS_P6.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <title>NOVA furniture | Обратная связь</title>
    
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

      <div class="menu">

        <nav class="menu-container">
          <ul class="main-menu">
            <li><a class="cont-link" href="Page_2.html">О нас</a></li>
            <li><a class="cont-link" href="Page_3.html">Производство</a></li>
            
          <ul class="hidden">
            <li сlass="cont-links"><a class="cont-link"id="Catalog" data-trigger="dropdown" href="Page_4.html">Каталог</a>
              <ul class="hiddenmenu">
                <li><a href="Page_4_1.html">Оазис</a></li>
                <li><a href="#">Пустыня</a></li>
                <li><a href="#">Модерн</a></li>
                <li><a href="#">Свобода</a></li>
                <li><a href="#">Стиль жизни</a></li>
                <li><a href="#">Континенталь</a></li>
                <li><a href="#">Восход</a></li>
                <li><a href="#">Харизма</a></li>
                <li><a href="#">Мираж</a></li>
              </ul>
            </li>
          </ul>
            <li><a class="cont-link" href="Page_6.php">Обратная связь</a></li>
            <li><a class="cont-link" href="Page_7.html">Контакты</a></li>
            <li><a class="lk-link" href="Page_8.php">
              <img id="lk" src="images/lk.png" alt="Личный кабинет"></a></li>
          </ul>
        </nav>

        <button class="adapt_btn" id="burger">
          <span></span><span></span><span></span>
        </button>
      </div>

      </div> 
    </div>
  </header>

  <main>

    <div>
    <h1>Обратная связь</h1>
        <div class="info">
            <div class="leftpic">
                <img class="opinion" src="images/page_6_2.png" alt="opinion"/>
            </div>
            <div class="righttext">
                  <p>Уважаемые покупатели! Данный раздел предназначен для того, 
                     чтобы вы могли оставить свой отзыв, либо добавить предложения по улучшению качества нашей работы.</p>
                  <p>Ваше обращение будет рассмотрено в кратчайшие сроки и ответ будет дан Вам на указанный Вами номер телефона.</p>
                  <p>Для предложений о сотрудничестве, либо для оптовых заказов позвоните по телефону, указанному в правом верхнем углу.
                </p>
            </div>
        </div>

    <h1>Обращение</h1>
        <div class="forms">


          <form action="feedback.php" method="post">
            <fieldset>
            <legend>Представьтесь, пожалуйста:</legend>
              <input type="text" id="fname" name="fname" placeholder="First name*" required><br>

              <input type="text" id="lname" name="sname" placeholder="Last name*" required><br>

              <input type="tel" id="lname" name="phonenum" placeholder="Номер телефона*" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" required>
            </fieldset>
          
            <fieldset>
            <legend>Категория обращения:</legend>
                <select required>
                  <option value="Question">Вопрос по покупке/доставке</option>
                  <option value="Question2">Предложения по улучшению нашей работы</option>
                  <option value="Question3">Вопросы по открытию франшизы</option>
                  <option value="Question4">Оставить отзыв</option>
                </select>
                <legend>Текст вопроса:</legend>
                <textarea id="quest" name="question" placeholder="Поле для отзыва"></textarea>
            </fieldset>
          <br>

            <fieldset class="radiofield">
            <legend>Откуда Вы узнали о нас:</legend><br>
              <input type="radio" name="r1">
              <label class="rad">Реклама в соц. сетях</label><br>

              <input type="radio" name="r1">
              <label class="rad">Рекомендации от знакомых</label><br>

              <input type="radio" name="r1">
              <label class="rad">Рассылка</label><br>
            </fieldset>
            <p class="send1"><input type="submit" class="send2" placeholder="Отправить"></p>
          </form>         

        </div>  
    </div>
  </main>




  <footer class="footer">
    <ul class="social-icon">
      <li class="social-icon__item">
        <a class="social-icon__link" href="#">
        <ion-icon name="logo-facebook"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-twitter"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-linkedin"></ion-icon></a>
      </li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
        <ion-icon name="logo-instagram"></ion-icon></a>
      </li>
    </ul>

    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="Page_1.html">Домой</a></li>
      <li class="menu__item"><a class="menu__link" href="Page_2.html">О нас</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Сервисы</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Команда</a></li>
      <li class="menu__item"><a class="menu__link" href="Page_7.html">Контакты</a></li>
    </ul>

    <p>&copy;
      <script type="text/javascript">document.write(new Date().getFullYear());</script> Антипина Анастасия | All Rights Reserved
    </p>
  </footer>
</body>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="./js/jquery-3.6.3.min.js"></script>
<script src="./js/menujs.js"></script>

</html>