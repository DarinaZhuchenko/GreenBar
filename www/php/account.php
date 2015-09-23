<!-- авторизация пользователя и перенаправление на  личную страницу-->
<?php
session_start();

    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("php/db.php");

$result = mysql_query("SELECT * FROM users_2 WHERE login='$login'",$db); 
$myrow = mysql_fetch_array($result);
if (empty($myrow['password']))
{ 
  exit ("<html>
          <head>
            <link rel='stylesheet' href='style.css'>
          </head>
          <body>
            <div id='popup'>
              <div class='window'> 
                <h2>Ошибка! Введенный логин или пароль неверный</h2></br>
                <a class='button' href='signin.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
              </div>
            </div>
          </body>
        </html>"); 
}
else 
{
if ($myrow['password']==$password) 
{
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                  <h2>Авторизация прошла успешно!</h2></br>
                  <a class='button' href='myaccount.php'>&nbsp;Моя учетная запись&nbsp;&#8594;&nbsp;</a>
                </div>
              </div>
            </body>
          </html>";
    }
 else 
    {
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                  <h2>Ошибка! Введенный логин или пароль неверный</h2></br>
                  <a class='button' href='signin.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
          </html>");
    }
}
?>