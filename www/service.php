<?php
session_start();
if (!empty($_SESSION['login']) or !empty($_SESSION['id']))
{
    echo("<script>location.href='table_reserve.php'</script>");
}
else{}
?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <title>Услуги - GreenBar</title>
      <link rel="stylesheet" href="style.css">
      <link rel="shortcut icon" href="favicon.ico">
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
          <td><a href="about_us.php"><img src="images/icons/about_us.svg" onmouseover="this.src='images/icons/about_us_2.svg'" onmouseout="this.src='images/icons/about_us.svg'">
          О нас</a></td>
          <td><a href="menu.php"><img src="images/icons/menu.svg" onmouseover="this.src='images/icons/menu_2.svg'" onmouseout="this.src='images/icons/menu.svg'
          ">Меню</a></td>
          <td><a href="discount.php"><img src="images/icons/discount.svg" onmouseover="this.src='images/icons/discount_2.svg'" onmouseout="this.src='images/icons/discount.svg'
          ">Акции</a></td>
          <td><a id="green" href="service.php"><img src="images/icons/service_2.svg">Услуги</a></td>
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
                  <a id='hover-link' href='signup.php'>Регистрация</a><br><a id='hover-link' href='signin.php'>Авторизация</a></div>
              </html>");
          }
              else
          { echo
              ("<html>
                  <a id='hover-link' href='myaccount.php'>Моя страница</a></div>
              </html>");  
          }
      ?> <!-- end col-1 -->
    </div> 
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- изображение -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10"><img src="images/service_table_reserve.jpg"></div>
    <div class="col-1"></div>
  </div> <!-- end row -->
<!-- таблица -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-5">
       <table class="service-table"> 
        <caption><h2>Наши услуги</h2></caption>
          <tr>
            <td><img src="images/icons/service_wifi.svg"></td>
            <td>
              <span>Wi-Fi</span>
              <span id="small-text"><br>бесплатное беспроводное покрытие Интернет всей территории кафе</span>
            </td>
          </tr>
          <tr>
            <td><img src="images/icons/service_parking.svg"></td>
            <td>
              <span>Велосипедная парковка</span>
              <span id="small-text"><br>5 охраняемых мест для велосипедов возле кафе</span>
            </td>
          </tr>
          <tr>
            <td><img src="images/icons/service_smoking.svg"></td>
            <td>
              <span>Место для курения</span>
              <span id="small-text"><br>Оснащенная территория для курящих людей</span>
            </td>
          </tr>
          <tr>
            <td><img src="images/icons/service_reserve.svg"></td>
            <td>
              <span>Заказ столиков</span>
              <span id="small-text"><br>Бесплатное резервирование столов на конкретную дату</span>
            </td>
          </tr>
          <tr>
            <td><img src="images/icons/service_takeaway.svg"></td>
            <td>
              <span>Еда на вынос</span>
              <span id="small-text"><br>Упаковка еды с собой</span>
            </td>
          </tr>
        </table>
      </div> <!-- end col-5 -->
      <div class="col-5">
       <table class="service-table"> 
        <caption><h2>У нас нельзя</h2></caption>
          <tr>
            <td><img src="images/icons/service_no_food.svg"></td>
            <td><span>Приносить еду с собой</span></td>
          </tr>
          <tr>
            <td><img src="images/icons/service_no_alcohol.svg"></td>
            <td><span>Распивать алкоголь</span>
            </td>
          </tr>
          <tr>
            <td><img src="images/icons/service_no_smoking.svg"></td>
            <td><span>Курить внутри помещения</span>
            </td>
          </tr>
        </table>
       </div> <!-- end col-5 -->
    </div> <!-- end row -->
  </div> <!-- grid -->
<div class="footer">
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</div>
</body>
</html>