<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>GreenBar - Главная страница</title>
      <link rel="shortcut icon" href="favicon.ico">
      <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="grid">
<!-- навигация -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-3"><a href="index.php"><img id="logo" src="images/logo.png" alt="GreenBar"></a></div>
    <div class="col-1"></div>
    <div class="col-6">   
      <table class="menu-style"> 
        <tr>
          <td><a href="about_us.php"><img src="images/icons/about_us.svg" onmouseover="this.src='images/icons/about_us_2.svg'" onmouseout="this.src='images/icons/about_us.svg'
          ">О нас</a></td>
          <td><a href="menu.php"><img src="images/icons/menu.svg" onmouseover="this.src='images/icons/menu_2.svg'" onmouseout="this.src='images/icons/menu.svg'
          ">Меню</a></td>
          <td><a href="discount.php"><img src="images/icons/discount.svg" onmouseover="this.src='images/icons/discount_2.svg'" onmouseout="this.src='images/icons/discount.svg'
          ">Акции</a></td>
          <td><a href="service.php"><img src="images/icons/service.svg" onmouseover="this.src='images/icons/service_2.svg'" onmouseout="this.src='images/icons/service.svg'
          ">Услуги</a></td>
          <td><a href="news.php"><img src="images/icons/news.svg" onmouseover="this.src='images/icons/news_2.svg'" onmouseout="this.src='images/icons/news.svg'
          ">Новости</a></td>
          <td><a href="contacts.php"><img src="images/icons/contacts.svg" onmouseover="this.src='images/icons/contacts_2.svg'" onmouseout="this.src='images/icons/contacts.svg'
          ">Контакты</a></td>
        </tr>
      </table>  
    </div> <!-- end col-6 -->
    <div class="col-1 menu-style">
      <?php
          if (empty($_SESSION['login']) or empty($_SESSION['id']))
          { echo
            ("<html>
              <a id='hover-link' href='signup.php'>Регистрация</a><br><a  id='hover-link' href='signin.php'>Авторизация</a></div>
            </html>");
          }
            else
          { echo
            ("<html>
              <a  id='hover-link' href='myaccount.php'>Моя страница</a></div>
            </html>"); 
          }
      ?>
      </div> <!-- end col-1 -->
    </div> <!-- end row -->
<!-- изображение -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <img src="images/index_food.jpg">
      <p id="center">г. Винница, ул. В. Порика, 5. Режим работы: пн-чт: 08:00 - 20:00, пт-вс: 10:00 - 22:00. Для заказа столиков <a id="link" href="signup.php">зарегистрируйтесь</a> или <a id="link" href="signin.php">авторизируйтесь</a></p>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- эмблемы -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <table class="index-table"> 
        <tr>
          <td align="center"><img src="images/index_oval_1.png"><p id="center">Мы используем в наших блюдах только свежие продукты </p></td>
          <td align="center"><img src="images/index_oval_2.png"><p id="center">Все овощи и фрукты вырощены на полях и теплицах города Жмеринка</p></td>
          <td align="center"><img src="images/index_oval_3.png"><p id="center">Наши продукты не содержат в себе консервантов и химикатов</p></td> 
        </tr>
      </table>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- ближайшие события, текущие предложения -->
  <div class="row">
    <div class="col-1"></div>
    <div id="two-row-table-1" class="col-5" >
      <h1>Ближайшие события</h1>
        <h2>20 февраля. Вечер настольных игр</h2>       
          <p id="red-line">В этот день все любители настольных игр могут воспрользоваться возможностью провести время за монополией.</p>
        <h2>25 февраля. Поэтический вечер</h2>      
          <p id="red-line">Все желающие поделиться своими стихами с публикой могут это сделать в среду, 25 февраля. Начало представления запланировано на 18 часов. Участники должны предварительно связаться с администратором по поводу своего участия по телефону: (063) 789-82-84. </p>
            <a class="button" href="all_news.html #all_news">&nbsp;Все события&nbsp;&#8594&nbsp;</a>
    </div> <!-- end col-5 -->
    <div id="two-row-table-2" class="col-5">
      <h1>Текущие предложения</h1>
        <h2 i>Скидка на греческий и овощной салат</h2>            
          <p id="red-line">Акция действует с 1 по 28 февраля 2015 года для всех посетителей кафе.</p>        
        <h2 >Каши по специальной цене</h2>            
          <p id="red-line">С 10 до 14 часов цена всех каш составляет 10 гривен. Акция действует с 1 января по 31 марта 2015 года.</p>       
        <h2 >Чай в подарок</h2>            
          <p id="red-line">При заказе от 100 гривен на выбор в подарок предлагается чайник <span><a href="menu.php #Id drink">чая.<span></a></p>
            <a class="button" href="discount.html">&nbsp;Все предложения&nbsp;&#8594&nbsp;</a>
      </div> <!-- end col-5 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</body>
</html>



