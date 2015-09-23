<?php
session_start();
if (empty($_SESSION['login']) or empty($_SESSION['id']))
{
    echo("<script>location.href='signin.php'</script>");
}
else{}
?>

<html>
<head>
     <meta charset="utf-8">
     <title>GreenBar - Регистрация</title>
     <link rel="shortcut icon" href="favicon.ico">
     <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="grid">
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
          <td><a href="news.php"><img src="images/icons/news.svg" onmouseover="this.src='images/icons/news_2.svg'" onmouseout="this.src='images/icons/news.svg'
          ">Новости</a></td>
          <td><a href="contacts.php"><img src="images/icons/contacts.svg" onmouseover="this.src='images/icons/contacts_2.svg'" onmouseout="this.src='images/icons/contacts.svg'
          ">Контакты</a></td>
        </tr>
      </table>   
    </div>
    <div class="col-1 menu-style" ><a id="link" style="color: #4b7c00;" href="myaccount.php">Моя страница</a></div> 
    <div class="col-1"></div>
  </div> 

<?php
echo ("<html>
  <div class='row'>
    <div class='col-4'></div>
      <div class='col-4'>
        <form class='account' method='post' action='myaccount.php'>
          <caption>
            <h4></h4><br>
            <h1 style='margin-bottom: 0%;'>Привет, ".$_SESSION['login']."</h1><br>
            <h4></h4><br>
          </caption>

            <input class='account-reserve-button' type='submit' name='service' value='Перейти к заказу столика&nbsp;&#8594&nbsp;'/>
            <input class='account-exit-button' type='submit' name='exit' value='&nbsp;&#8592&nbsp;Выйти'/>       
        </form>
      </div>
    <div class='col-4'></div>
  </div>
  </html>");

if (isset($_POST['exit']))
{
    session_destroy();
    echo("<script>location.href='signin.php'</script>");
}

 if (isset($_POST['service']))
{
    echo("<script>location.href='table_reserve.php'</script>");
}
?>
</div>
<div class="footer">
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</div>
</body>
</html> 
