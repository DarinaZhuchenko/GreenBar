<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Новости - GreenBar</title>
      <link rel="shortcut icon" href="favicon.ico">
<!-- CSS -->  
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css">
<!-- JS -->
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
          <td><a id="green" href="news.php"><img src="images/icons/news_2.svg">Новости</a></td>
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
                  <a id='hover-link' href='signup.php'>Регистрация</a><br><a id='hover-link' href='signin.php'>Авторизация</a></div>
              </html>");
          }
              else
          { echo
              ("<html>
                  <a id='hover-link' href='myaccount.php'>Моя страница</a></div>
              </html>");  
          }
      ?> 
    </div> <!-- end col-1 --> 
    <div class="col-1"></div>
  </div> <!-- row -->
<!-- Flexslider -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="images/news_music.jpg" />
          </li>
          <li>
            <img src="images/news_events.jpg" />
          </li>
        </ul>
      </div>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- Ближайшие события -->
  <div class="row">
    <div class="col-1"></div>
      <div id="content-padding" class="col-10">
        <h1>Ближайшие события</h1>
          <h2>20 февраля. Вечер настольных игр</h2>       
            <p id="red-line">В этот день все любители настольных игр могут воспрользоваться возможностью провести время за монополией.</p>
        <h2>25 февраля. Поэтический вечер</h2>      
        <p id="red-line">Все желающие поделиться своими стихами с публикой могут это сделать в среду, 25 февраля. Начало представления запланировано на 18 часов. Участники должны предварительно связаться с администратором по поводу своего участия по телефону: (063) 789-82-84.</p>
          <h2>2 марта. Игра в "Мафию"</h2>            
            <p id="red-line">Вечером понедельника состоится игра "Мафия". Начало в 20:00. Перед игрой новичкам будут разъяснены правила.</p>
          <h2>17 марта. Дегустация индийских чаев</h2>         
            <p id="red-line">Все желающие могут бесплатно пробовать сорта индийского чая с возможностью их приобретения.</p>
              <a class="button" href="all_news.php #all_news">&nbsp;Все события&nbsp;&#8594&nbsp;</a>        
              <a class="button" href="news_archive.php #archive">&nbsp;Архив&nbsp;&#8594&nbsp;</a>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<div class="footer">
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</div>
</body>