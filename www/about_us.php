<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>О нас - GreenBar</title>
      <link rel="shortcut icon" href="favicon.ico">
<!--CSS -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen"/>
      <link rel="stylesheet" href="css/flexslider.css" type="text/css">
<!-- JS -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      <script type="text/javascript" src="js/source/jquery.fancybox.pack.js?v=2.1.5"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
      <script src="js/jquery.flexslider.js"></script>
<!-- No conflict-->
      <script>
              var $FS = jQuery.noConflict();  
              $FS('#myDiv').hide()
      </script>
<!-- Fancybox gallery -->
      <script>
              $(document).ready(function() {
              $(".fancybox").fancybox();
              });
      </script>
<!-- Flexslider -->
      <script>
              charset="utf-8"
              $FS(window).load(function() {
              $FS('.flexslider').flexslider();
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
          <td><a id="green" href="about_us.php"><img src="images/icons/about_us_2.svg">О нас</a></td>
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
<!-- Flexslider -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="images/about_us_cafe_1.jpg" />
          </li>
          <li>
            <img src="images/about_us_cafe_2.jpg" />
          </li>
          <li>
            <img src="images/about_us_cafe_3.jpg" />
          </li>
        </ul>
      </div>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- о нас, наши условия -->
  <div class="row">
      <div class="col-1"></div> 
      <div class="col-10">
        <h2>О нас</h2>
          <p id="red-line">«GreenBar» — это первое в Виннице заведение, распологающее полноценным меню для вегетарианцев. Мы были открыты в 2008 году и с тех пор успели завоевать доверие людей в сфере здорового и полезного питания. В «GreenBar» можно приходить как на свидания, душевные дружеские посиделки, так и просто забегать перекусить быстро, вкусно и недорого.</p>
        <h2>Наши условия</h2>
          <p id="red-line">Интерьер нашего кафе — светлый и вдохновляющий. Мы располагаем двумя залами на 13 и 9 столов. Общее количество посадочных мест — 74. В период с мая по сентябрь мы так же располагаем летней площадкой, остащенной всеми условиями для кофортного времяпровождения. 
          <br><p id="red-line">Кафе стремится не только накормить гостей, но и устроить им культурную программу. У нас часто проходят  встречи со знатоками здорового питания и  мастер-классы по приготовлению вегетарианских и сыроедческих блюд.<p><p>
        <h2>Галерея</h2>
      </div> <!-- col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- галерея -->
  <div class="row">
    <div class="col-1"></div>
      <div id="gallery"class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_1.jpg"><img src="images/gallery/cafe_1_small.jpg"></a>
      </div>
      <div id="gallery" class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_2.jpg"><img src="images/gallery/cafe_2_small.jpg"></a>
      </div>
      <div id="gallery" class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_3.jpg"><img src="images/gallery/cafe_3_small.jpg"></a>
      </div>
      <div id="gallery" class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_4.jpg"><img src="images/gallery/cafe_4_small.jpg"></a>
      </div>
      <div id="gallery" class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_5.jpg"><img src="images/gallery/cafe_5_small.jpg"></a>
      </div>
    <div class="col-1"></div>
  </div> <!-- end row -->
  <div class="row">
    <div class="col-1"></div>
      <div id="gallery" class="col-2">
        <a class="fancybox" rel="group" href="images/gallery/cafe_6.jpg"><img src="images/gallery/cafe_6_small.jpg"></a>
      </div>
    <div class="col-9"></div>
  </div> <!-- end row -->
</div> <!-- end grid -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</body>