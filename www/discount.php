<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Акции - GreenBar</title>
      <link rel="shortcut icon" href="favicon.ico">
<!-- CSS files -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css">
<!-- JS files -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
      <script src="js/jquery.flexslider.js"></script>
<!-- Flexslider -->
      <script>
              charset="utf-8"
              $(window).load(function() {
              $('.flexslider').flexslider();
              });
      </script>
</head>

<body>
<div class="grid">
<!-- навигация -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-3"><a href="index.php"><img id="logo" src="images/logo.png"></a></div>
    <div class="col-1"></div>
    <div class="col-6">
      <table class="menu-style"> 
        <tr>
          <td><a href="about_us.php"><img src="images/icons/about_us.svg" onmouseover="this.src='images/icons/about_us_2.svg'" onmouseout="this.src='images/icons/about_us.svg'
          ">О нас</a></td>
          <td><a href="menu.php"><img src="images/icons/menu.svg" onmouseover="this.src='images/icons/menu_2.svg'" onmouseout="this.src='images/icons/menu.svg'
          ">Меню</a></td>
          <td><a id="green" href="discount.php"><img src="images/icons/discount_2.svg">Акции</a></td>
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
                  <a href='signup.php'>Регистрация</a><br><a href='signin.php'>Авторизация</a></div>
              </html>");
          }
              else
          { echo
              ("<html>
                  <a href='myaccount.php'>Моя страница</a></div>
              </html>");  
          }
      ?>
    </div> <!-- end col-1 -->
  </div> <!-- end row -->
<!-- flexslider -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="images/discount_birthday.jpg" />
          </li>
          <li>
            <img src="images/menu_salads.jpg" />
          </li>
          <li>
            <img src="images/discount_tea.jpg" />
          </li>
        </ul>
      </div>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- Постоянные акции, текущие предложения -->
  <div class="row">
    <div class="col-1"></div>
    <div id="two-row-table-1" class="col-5">
      <h1>Постоянные акции</h1>
        <h2>Скидка именинникам</h2>       
          <p id="red-line">При предъявлении паспорта скидка на весь заказ составляет 25%.</p>
        <h2>Скидка студентам</h2>      
          <p id="red-line">При предъявлении студентческого билета скидка на весь заказ составляет 10%.</p>
        <h2>Скидка постоянным клиентам<h2>      
          <p id="red-line">У нас действует гибкая система скидом для частых гостей нашего кафе. Подробности уточняйте у администратора.</p>
    </div> <!-- end col-5 -->
    <div id="two-row-table-2" class="col-5">
      <h1>Текущие предложения</h1>
        <h2>Скидка на греческий и овощной салат</h2>            
          <p id="red-line">Акция действует с 1 по 28 февраля 2015 года.</p>         
        <h2>Каши по специальной цене</h2>            
          <p id="red-line">С 10 до 14 часов цена всех каш составляет 10 гривен. Акция действует с 1 января по 31 марта 2015 года.</p>         
        <h2>Чай в подарок<h2>            
          <p id="red-line">При заказе от 100 гривен на выбор в подарок предлагается чайник <a href="menu.php #Id drink">чая</a>.</p>  
            <a class="button" href="menu.php #menu">&nbsp;Меню&nbsp;&#8594&nbsp;</a> 
    </div> <!-- end col-5 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</body>

