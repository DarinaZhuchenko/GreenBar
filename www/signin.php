<?php 
  session_start();
// Проверяем, пусты ли переменные логина и id пользователя
  if (empty($_SESSION['login']) or empty($_SESSION['id'])){}
  else{
    echo("<script>location.href='myaccount.php'</script>");
    }
?>

<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>GreenBar - Регистрация</title>
     <link rel="shortcut icon" href="favicon.ico">
     <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="grid">
<!-- навигация -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-3"><a href="index.php"><img src="images/logo.png" style="padding-top: 8%"></a></div>
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
    <div class="col-1 menu-style"><a href="signup.php">Регистрация</a><br><a id="link" style="color:  #4b7c00;"href="signin.php">Авторизация</a></div> 
  </div> <!-- end row -->
<!-- авторизация -->
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
      <form class="signin" method="post" action="testreg.php">
        <caption><h1>Авторизация</h1></caption>
        <table>
          <tr>
            <p>Вы вошли на сайт как гость. Введите свой логин и пароль или <a href='signup.php' id='link'>зарегестрируйтесь</a> для входа в систему</p>
          </tr>
          <tr>
            <td>
              <label>Логин<br></label>
              <input class="input" type="text" name="login" placeholder="Логин" required/><br>
            </td>
            <td>
              <label>Пароль<br></label>      
              <input class="input" type="password" name="password" placeholder="Пароль" required/><br>   
            </td>
          </tr>
        </table>
        <input class="signin-form-button" type="submit" name="submit" value="Войти" />
      </form>
    </div> <!-- end col-4 -->
    <div class="col-4"></div>
  </div> <!-- end col-row -->
</div> <!-- end grid -->
<footer>
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</footer>
</body>