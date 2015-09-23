<?php
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo("<script>location.href='service.php'</script>");
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
          <td><a href="about_us.php"><img src="images/icons/about_us.svg" onmouseover="this.src='images/icons/about_us_2.svg'" onmouseout="this.src='images/icons/about_us.svg'
          ">О нас</a></td>
          <td><a href="menu.php"><img src="images/icons/menu.svg" onmouseover="this.src='images/icons/menu_2.svg'" onmouseout="this.src='images/icons/menu.svg'
          ">Меню</a></td>
          <td><a href="discount.php"><img src="images/icons/discount.svg" onmouseover="this.src='images/icons/discount_2.svg'" onmouseout="this.src='images/icons/discount.svg'
          ">Акции</a></td>
          <td><a href="service.php"><img src="images/icons/service_2.svg">Услуги</a></td>
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
          {
              echo
              ("<html>
                  <a id='hover-link' href='signup.php'>Регистрация</a><br><a id='hover-link' href='signin.php'>Авторизация</a></div>
              </html>");
          }
              else
          {
             echo
              ("<html>
                  <a id='hover-link' href='myaccount.php'>Моя страница</a></div>
              </html>");  
          }
      ?>
    </div> 
    <div class="col-1"></div>
  </div> <!-- row -->
<!-- изображение -->
  <div class="row">
    <div class="col-1"></div>
      <div class="col-6"><img src="images/map.png"></div>
      <div class="col-4">
      <form class="account" method='post' action='php/send_mail.php'>
      <table>
         <caption><h1>Резерв стола</h1><br></caption>
        <tr>
          <td>
            <label style="font-size:1.6vw">Имя и фамилия<br></label>
            <input class="input"  type="text" name="name" placeholder="Имя и фамилия" required/><br>
          </td> 
          <td>
              <label>Телефон<br></label>      
              <input class="input" type="tel" name="phone" pattern="\(\d\d\d\) ?\d\d\d-\d\d-\d\d" placeholder="(###) ###-##-##" required/><br>   
          </td>
        </tr>
        <tr>
          <td>
              <label>Стол №<br></label>
              <select class="input" name="table" required/>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
              </select>
          </td> 
          <td>
              <label>Гостей<br></label>      
              <input class="input" type="number" min="1" max="12" step="1" style="margin-left: 15%" name="guests" required/><br>
          </td>
        </tr>
        <tr>
          <td>
            <label>Дата<br></label>
            <input class="input" style="margin-left: 10%" type="date" max="2015-06-30" min="2015-06-01" value="2015-06-01" name="date" required/><br>
        </td> 
        <td>
            <label>Время<br></label>       
            <input class="input" style="margin-left: 15%" type="time" name="time"  required/><br>   
        </td>
      </tr>
    </table>    
    <input class='reserve-button-form' type='submit' name='send' value='Зарезервировать'/>       
    </form>
    </div>      
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