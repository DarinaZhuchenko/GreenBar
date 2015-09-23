<?php
        $to = 'jdl93@mail.ru'; 
        $subject = 'Обратный звонок'; 
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['phone'].'</p>      
                        <p>Стол №: '.$_POST['table'].'</p>  
                        <p>Гостей: '.$_POST['guests'].'</p>  
                        <p>Дата: '.$_POST['date'].'</p>   
                        <p>:Время '.$_POST['time'].'</p>                   
                    </body>
                </html>'; 
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
        $headers .= "From: Отправитель <from@example.com>\r\n"; 
        mail($to, $subject, $message, $headers); 
        exit("<html>
    <head>
         <meta charset='utf-8'>
         <title>GreenBar - Регистрация</title>
         <link rel='shortcut icon' href='favicon.ico'>
         <link rel='stylesheet' href='style.css'>
    </head>

    <body>
      <div class='grid'>
        <div class='row'>
          <div class='col-1'></div>
          <div class='col-3'><a href='index.php'><img src='images/logo.png' style='padding-top: 8%''></a></div>
          <div class='col-1'></div>
          <div class='col-6'>   
            <table class='menu_style'> 
              <tr>
                 <td>
                     <a href='about_us.php'><img src='images/icons/about_us.svg' onmouseover='this.src='images/icons/about_us_2.svg'' onmouseout='this.src='images/icons/about_us.svg''
              'border='0'>О нас</a>
                  </td>
                  <td>
                      <a href='menu.php'><img src='images/icons/menu.svg' onmouseover='this.src='images/icons/menu_2.svg'' onmouseout='this.src='images/icons/menu.svg''
              'border='0'>Меню</a>
                  </td>
                  <td>
                      <a href='discount.php'><img src='images/icons/discount.svg' onmouseover='this.src='images/icons/discount_2.svg'' onmouseout='this.src='images/icons/discount.svg''
              'border='0'>Акции</a>
                  </td>
                  <td>
                      <a href='service.php'><img src='images/icons/service.svg' onmouseover='this.src='images/icons/service_2.svg'' onmouseout='this.src='images/icons/service.svg''
              'border='0'>Услуги</a>
                  </td>
                  <td>
                     <a href='news.php'><img src='images/icons/news.svg' onmouseover='this.src='images/icons/news_2.svg'' onmouseout='this.src='images/icons/news.svg''
              'border='0'>Новости</a>
                  </td>
                  <td>
                    <a href='contacts.php'><img src='images/icons/contacts.svg' onmouseover='this.src='images/icons/contacts_2.svg'' onmouseout='this.src='images/icons/contacts.svg''
              'border='0'>Контакты</a>
                  </td>
              </tr>
            </table>   
          </div>
          <div class='col-1 menu_style'><a id='link' href='signup.php' style='color:  #4b7c00;''>Регистрация</a><br><a href='signin.php'>Авторизация</a></div> 
      </div> 
      <div id='popup'>
        <div class='window'> 
            <h4>Ваша форма была доставлена! В скором времени мы свяжемся с Вами</h4></br>
            <a class='button' style='margin-left: 110px' href='index.php'>&nbsp;На главную&nbsp;&#8594;&nbsp;</a>
        </div>
      </div>
    </div>
    </html>");
?>

