<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Аохив новостей - GreenBar</title>
      <link rel="shortcut icon" href="favicon.ico">
<!-- CSS -->  
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css">
<!-- JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
      <script src="js/jquery.flexslider.js"></script> 
<!-- Flexslide r-->
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
    <div class="col-3"><a href="index.php"><img id="logo" src="images/logo.png" style="padding-top: 8%"></a></div>
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
          <td><a id="green" href="news.php"><img src="images/icons/news_2.svg">Новости</a>
          </td>
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
    </div> 
    <div class="col-1"></div>
  </div> <!-- end row -->
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
      </div>
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- архив -->
  <div class="row">
    <div class="col-1"></div>
    <div id="content-padding" class="col-10">
      <p><a href="index.php">Главная</a>/<a href="news.php">Новости/</a><a id="link" href="news_archive.php">Архив новостей</a></p>  
        <h1 id="archive">Архив событийя</h1>
          <h2>31 декабря. Новогодняя вечеринка</h2>       
            <p id="red-line">Встреча Нового Года вместе с GreenBar. Специальное новогоднее меню, скидки и розыгрыг подарков. Начало вечера в 20:00.</p>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<div class="footer">
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</div>
</body>