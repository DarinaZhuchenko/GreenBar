<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Меню - GreenBar</title>
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
<!-- No conflict -->
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
          <td><a href="about_us.php"><img src="images/icons/about_us.svg" onmouseover="this.src='images/icons/about_us_2.svg'" onmouseout="this.src='images/icons/about_us.svg'">
          О нас</a></td>
          <td><a id="green" href="menu.php"><img src="images/icons/menu_2.svg">Меню</a></td>
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
    </div>
  </div> <!-- end row -->
<!-- Flexslider -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="images/menu_salads.jpg" />
          </li>
          <li>
            <img src="images/menu_porridge.jpg" />
          </li>
          <li>
            <img src="images/menu_desert.jpg" />
          </li>
        </ul>
      </div>
    </div> <!-- end col-10 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- Меню -->
  <div class="row">
    <div class="col-1"></div>
      <div class="col-5">
        <table id="#two-row-table-1" class="menu-table"> 
          <tr>
            <td id="menu"><h1>Салаты</h1></td>
            <td><span>грамм</span></td>
            <td><span>цена</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/1.jpg">Хрустящий оливье с бататом</a></span>
                <span id="small-text"><br>(свежие огурцы, батат, зеленый горошек, укроп, соус)</span>
              </td>
              <td><span>220</span></td>
              <td><span>25</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/2.jpg">Греческий салат</a></span>
                <span id="small-text"><br>(помидор, огурец, сыр фета, оливки, салат)</span>
              </td>
              <td><span>200</span></td>
              <td><span id="green">22</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/3.jpg">Салат из свежих овощей</a></span>            
                <span id="small-text"><br>(брокколи, лук, перец, салат, зеленый горошек, кукуруза)</span>
              </td>
              <td><span>180</span></td>
              <td><span id="green">18</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/4.jpg">Салат с творожным сыром и пшеницей</a></span>              
                <span id="small-text"><br>(шпинат, салатные листья, яблоко, перец, пшеница ростки, творожный сыр, грецкий орех)</span>
              </td>
              <td><span>180</span></td>
              <td><span>27</span></td>
          </tr>

          <tr>
          <td><h1>Каши</h1></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/5.jpg">Манная каша</a><span>
                <span id="small-text"><br>(добавки: мед, варенье в ассортименте)</span>
              </td>
              <td><span>200</span></td>
              <td><span>15</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/6.jpg">Овсяная каша</a></span>
                <span id="small-text"><br>(добавки: мед, варенье в ассортименте)</span>
              </td>
              <td><span>200</span></td>
              <td><span>15</span></td>
          </tr>

          <tr>
            <td><h1>Супы</h1>
            </td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/7.jpg">Грибной крем-суп</a></span>
                <span id="small-text"><br>грибы, гренки, зеленый горошек, масло лесного орешка</span>
              </td>
              <td><span>300</span></td>
              <td><span>30</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/8.jpg">Свекольный крем-суп</a></span>
                <span id="small-text"><br>свекла, творожный сыр, кедровые орешки, сельдерей</span>
              </td>
              <td><span>300<span></td>
              <td><span>28<span></td>
          </tr>
        </table>
      </div>

    <div class="col-5">
      <table id="two-row-table-2" class="menu-table"> 
          <tr>
              <td><h1>Основные блюда</h1></td>
              <td><span>грамм<br> (мл.)</span></td>
              <td><span>цена</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/9.jpg">Запеченый картофель с овощами</a></span>
                <span id="small-text"><br>(картофель, шпинат, грибы, сыры)</span>
              </td>
              <td><span>230</span></td>
              <td><span>26</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/10.jpg">Гречневая лапша с овощами</a></span>
                <span id="small-text"><br>(гречка, морковь, лук, грибы шинтаке)</span>
              </td>
              <td><span>220</span></td>
              <td><span>32</span></td>
          </tr>

          <tr>
              <td>
                <span><a id="link" class="fancybox" rel="group" href="images/menu/11.jpg">Рулетики из цукини</a></span>              
                <span id="small-text"><br>(цукини, итальянский сыр, перец)</span>
              </td>
              <td><span>190</span></td>
              <td><span>15</span></td>
          </tr>

          <tr>
          <td><h1>Напитки</h1></td>
          </tr>

          <tr>
              <td id="Id drink">
                <span>Черный чай</span>
                <span id="small-text"><br>(цейлонский, саусеп, с бергамотом)</span>
              </td>
              <td><span>400</span></td>
              <td><span>25</span></td>
          </tr>

          <tr>
              <td>
                <span>Зеленый чай</span>
                <span id="small-text"><br>(гандпаудер, молочный улун)</span>
              </td>
              <td><span>400</span></td>
              <td><span>25</span></td>
          </tr>

          <tr>
              <td>
                <span>Имбирный чай</span>
                <span id="small-text"><br>(имбирь, лимон, мята, корица)</span>
              </td>
              <td><span>250</span></td>
              <td><span>25</span></td>
          </tr>

          <tr>
              <td>
                <span>Свежие соки</span>
                <span id="small-text"><br>(яблочный, вишневый, апельсиновый)</span>
              </td>
              <td><span>500</span></td>
              <td><span>10</span></td>
          </tr>

          <tr>
          <td><h1>Десерты</h1></td>
          </tr>

          <tr>
              <td><span><a id="link" class="fancybox" rel="group" href="images/menu/12.jpg">Кокосовый пирог</a></span></td>
              <td><span>150</span></td>
              <td><span>15</span></td>
          </tr>

          <tr>
              <td><span><a id="link" class="fancybox" rel="group" href="images/menu/13.jpg"><span id="green">new</span>Яблочный пирог</a></span></td>
              <td><span>150</span></td>
              <td><span>12</span></td>
          </tr>

           <tr>
              <td><span><a id="link" class="fancybox" rel="group" href="images/menu/14.jpg">Тыквенный пирог</a></span></td>
              <td><span>150</span></td>
              <td><span>10</span></td>
          </tr>

           <tr>
              <td><span><a id="link" class="fancybox" rel="group" href="images/menu/15.jpg">Имбирное печенье</a></span></td>
              <td><span>100</span></td>
              <td><span>7</span></td>
          </tr>
        </table>
      </div> <!-- end col-5 -->
    <div class="col-1"></div>
  </div> <!-- end row -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</div> <!-- end grid -->


