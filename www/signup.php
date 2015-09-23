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
          "border="0">Контакты</a></td>
        </tr>
      </table>   
    </div> <!-- end col-5 -->
    <div class="col-1 menu-style"><a id="link" href="signup.php" style="color: #4b7c00;">Регистрация</a><br><a id="hover-link" href="signin.php">Авторизация</a></div> 
    <div class="col-1"></div>
  </div> <!-- end row -->
  <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
<!-- регистрация -->
      <form class="signup" method="post" action="php/save_user.php">
        <caption><h1>Регистрация</h1></caption>
        <table>
          <tr>
            <td>
              <label>Имя<br></label>
              <span id="small-text">Не более 16 символов</span>
              <input class="input" type="text" name="name" placeholder="Имя" required/><br>
            </td> 
            <td>
              <label>e-mail<br></label>      
              <span id="small-text">От 8 до 32 символов</span>  
              <input class="input"type="email" name="mail" placeholder="example@mail.com" required/><br>   
            </td>
          </tr>
          <tr>
            <td>
              <label>Фамилия<br></label>
              <span id="small-text" >Не более 16 символов</span>
              <input class="input" type="text" name="surname" placeholder="Фамилия" required/><br>
            </td> 
            <td>
              <label>Пароль<br></label>      
              <span id="small-text">От 6 до 32 символов</span>  
              <input class="input" type="password" name="password" placeholder="Пароль" required/><br>   
            </td>
          </tr>
          <tr>
            <td>
              <label>Логин<br></label>
              <span id="small-text">От 3 до 16 символов</span>
              <input class="input" type="text" name="login" placeholder="Логин" required/><br>
            </td> 
            <td>
              <label style="font-size:1.3vw;">Повторите пароль<br></label>      
              <span id="small-text" >Не более 16 символов</span>  
              <input class="input" type="password" name="r_password" placeholder="Введите пароль повторно" required/><br>   
            </td>
          </tr>
        </table>
        <input class="signup-form-button"  type="submit" name="submit" value="Зарегистрироваться" />
      </form>
    </div> <!-- end col-4 -->
    <div class="col-4"></div>
  </div> <!-- row -->
</div> <!-- grid -->
<div class="footer">
  <p id="center">Идея и разработка: <a id="link" href="mailto:darinazhuchenko@gmail.com">Жученко Дарина</a></p>  
</div>
</body>
