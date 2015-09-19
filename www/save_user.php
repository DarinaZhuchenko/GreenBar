<!-- проверка данных на валидность, в случае успеха их запись в таблицу бд-->
<?php
session_start();

/*регулярное выражение для проверки почты*/
function check_email($mail)
{
    if(!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i",$mail)){return false;}
    return true;
}

/*регулярное выражение для проверки пароля*/
function check_password($password)
{
    if(!preg_match("/[0-9A-Za-z_\.]$/i",$password)){return false;}
    return true;
}

/*проверка длины имени*/
if(strlen($_POST["name"])>16)
{
    $_SESSION["error"]="длинное имя";
    exit("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                <h2>Ошибка! Имя должен содержать не более 16 символов</h2></br>
                <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
              </div>
            </div>
          </body>
        </html>");
}

/*проверка длины фамилии*/
if(strlen($_POST["surname"])>16)
{
    $_SESSION["error"]="длинная фамилия";
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                  <h2>Ошибка! Фамилия должна содержать не более 16 символов</h2></br>
                  <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
          </html>");
}

/*проверка длины логина*/
if(strlen($_POST["login"])<3 || strlen($_POST["login"])>16)
{
    $_SESSION["error"]="неправильный логин";
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                    <h2>Ошибка! Логин должен содержать от 3 до 16 символов</h2></br>
                    <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
          </html>");
}

/*проверка длины пароля*/
if(strlen($_POST["password"])<6 || strlen($_POST["password"])>32)
{
    $_SESSION["error"]="неправильный пароль";
    exit ("<html>
          <head>
            <link rel='stylesheet' href='style.css'>
          </head>
          <body>
            <div id='popup'>
              <div class='window'> 
                <h2>Ошибка! Пароль должен содержать от 6 до 32 символов</h2></br>
                <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
              </div>
            </div>
          </body>
        </html>");
}

/*проверка длины адреса почты*/
if(strlen($_POST["mail"])<8 || strlen($_POST["mail"])>32)
{
    $_SESSION["error"]="неправильный адрес почты";
    exit ("<html> 
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                  <h2>Ошибка! Email должен содержать от 8 до 32 символов</h2></br>
                  <a class='button'  href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            <body>
          </html>");
}

/*проверка корректности пароля*/
if(!check_password($_POST["password"]))
{
    $_SESSION["error"]="некорректный пароль";
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                  <h2>Ошибка! Пароль должен содержать только латинские буквы и цифры.</h2></br>
                  <a class='button'href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
</html>");
}

/*проверка корректности адреса почты*/
if(!check_email($_POST["mail"]))
{
    $_SESSION["error"]="некорректный адрес почты";
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
            <div id='popup'>
              <div class='window'> 
                <h2>Ошибка! Email должен иметь вид: example@mail.com</h2></br>
                <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
              </div>
            </div>
          </body>
        </html>");
}

/*проверка идентичности паролей*/
if($password != $r_password){
  exit ("<html>
          <head>
            <link rel='stylesheet' href='style.css'>
          </head>
          <body>
          <div id='popup'>
            <div class='window'> 
              <h2>Ошибка! Пароли не совпадают</h2></br>
              <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
            </div>
          </div>
        </body>
      </html>"); 
}   

    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} } 
    if (isset($_POST['surname'])) { $surname=$_POST['surname']; if ($surname =='') { unset($surname);} }
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['mail'])) { $mail=$_POST['mail']; if ($mail =='') { unset($mail);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['r_password'])) { $r_password=$_POST['r_password']; if ($r_password =='') { unset($r_password);} }

    /*Преобразует данные*/
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
    $mail = stripslashes($mail);
    $mail = htmlspecialchars($mail);
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $r_password = stripslashes($r_password);
    $r_password = htmlspecialchars($r_password);

    /*Удаляет пробелы в начале и конце строки*/
    $login = trim($login);
    $password = trim($password);

include ("db.php");

/*проверка уникальности логина*/
$result = mysql_query("SELECT id FROM users_2 WHERE login='$login'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) 
{
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                    <h2>Ошибка! Такой логин уже существует, придумайте новый логин</h2></br>
                    <a class='button' href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
          </html>");
}

/*проверка уникальности почты*/
$result = mysql_query("SELECT id FROM users_2 WHERE mail='$mail'",$db);
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])) 
{
    exit ("<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                    <h2>Ошибка! Такой электронный адрес уже существует, придумайте новый логин</h2></br>
                    <a class='button'  href='signup.php'>&nbsp;&#8592;&nbsp;Назад&nbsp;</a>
                </div>
              </div>
            </body>
          </html>");
}

/*добавление данных в таблицу*/
$result2 = mysql_query ("INSERT INTO users_2 (name, surname, mail, login, password) VALUES('$name', '$surname', '$mail', '$login','$password')"); 
if ($result2=='TRUE')
{
  echo "<html>
          <head>
            <link rel='stylesheet' href='style.css'>
          </head>
          <body>
            <div id='popup'>
              <div class='window'> 
                  <h2>Регистрация прошла успешно! Для входа на сайт</h2></br>
                  <a class='button' href='signin.php'>&nbsp;авторизируйтесь&nbsp;</a>
              </div>
            </div>
          </body>
        </html>";
}
else 
{
    echo "<html>
            <head>
              <link rel='stylesheet' href='style.css'>
            </head>
            <body>
              <div id='popup'>
                <div class='window'> 
                    <h4>Ошибка! Вы не зарегестрированы</h4></br>
                    <a class='button' style='margin-left: 24%' href='signup.php'>&nbsp;Назад&nbsp;</a>
                </div>
              </div>  
            </body>
          </html>";
} 
?>