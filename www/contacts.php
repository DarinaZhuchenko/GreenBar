<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Контакты - GreenBar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="shortcut icon" href="favicon.ico">
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
          ">О нас</a>
          </td>
          <td><a href="menu.php"><img src="images/icons/menu.svg" onmouseover="this.src='images/icons/menu_2.svg'" onmouseout="this.src='images/icons/menu.svg'
          ">Меню</a>
          </td>
          <td><a href="discount.php"><img src="images/icons/discount.svg" onmouseover="this.src='images/icons/discount_2.svg'" onmouseout="this.src='images/icons/discount.svg'
          ">Акции</a>
          </td>
          <td><a href="service.php"><img src="images/icons/service.svg" onmouseover="this.src='images/icons/service_2.svg'" onmouseout="this.src='images/icons/service.svg'
          ">Услуги</a>
          </td>
          <td><a href="news.php"><img src="images/icons/news.svg" onmouseover="this.src='images/icons/news_2.svg'" onmouseout="this.src='images/icons/news.svg'
          ">Новости</a>
          </td>
          <td><a id="green" href="contacts.php"><img src="images/icons/contacts_2.svg">Контакты</a>
          </td>
        </tr>
      </table>
    </div> <!-- end col-5-->
    <div class="col-1 menu-style">
      <?php
          if (empty($_SESSION['login']) or empty($_SESSION['id']))
          {
              echo
              ("<html>
                  <a href='signup.php'>Регистрация</a><br><a href='signin.php'>Авторизация</a></div>
              </html>");
          }
              else
          {
             echo
              ("<html>
                  <a href='myaccount.php'>Моя страница</a></div>
              </html>");  
          }
      ?>
    </div> <!-- end col-1 -->
  </div> <!-- end row -->
<!-- изображение -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10"><img src="images/contacts_food.jpg"></div>
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- режим работы, карта -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-5">
      <h2 id="red-line">Режим работы</h4>       
        <p>понедельник - четверг 8:00 - 20:00<br>пятница - воскресенье 10:00 - 22:00</p>
      <h2 id="red-line">Контактная информация</h2>       
        <p>администратор кафе: (063) 789-82-84<br>резерв столов: (050) 284-61-59<br>e-mail: GBsupport@gmail.com</p>
      <h2 id="red-line">Как добраться</h2>  
        <p>Из центра: трамвай №6, троллейбус №5, 10, 14. Остановка "проспект Космонавтов". Пройтись вверх по пр. Космонавтов один квартал вверх и свернуть направо.</p>
    </div> <!-- end col-5 -->
    <div class="col-5">
      <h2 id="red-line">Мы на карте</h2> 
        <div class="responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2605.5224239447152!2d28.423024034393293!3d49.22858361839236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5c66b9749b1f%3A0x5371f6ac1f0edcd6!2z0LLRg9C7LiDQktCw0YHQuNC70Y8g0J_QvtGA0LjQutCwLCA1LCDQktGW0L3QvdC40YbRjywg0JLRltC90L3QuNGG0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1422800056595" width="100%" height="200" frameborder="0" style="border:0"></iframe> 
        </div>
    </div> <!-- end col-5 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</body>