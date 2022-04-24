<?php
?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Reiting</title>
    <link rel='stylesheet' href='plant.css'/>
    <link rel='stylesheet' href='style.css'/>
    <link rel='stylesheet' href='saroja.css'/>
    <link href='https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap'
          rel='stylesheet'>
</head>
<body class='content'>
<form method='post' class='aleft'>
    <input type='submit' name='Glavnaya' class='aleft__buttons aleft__buttons_selected' style='cursor: pointer;' value='Мои растения'>
    <input type='submit' name='Katalog' class='aleft__buttons' style='cursor: pointer;' value='Каталог'>
    <input type='submit' name='Blog' class='aleft__buttons' style='cursor: pointer;' value='Блог'>
    <input type='submit' name='Reiting' class='aleft__buttons ' style='cursor: pointer;' value='Рейтинг'>
    <input type='submit' name='Karta' class='aleft__buttons ' style='cursor: pointer;' value='Карта'>




</form>
<div class='main'>
    <div class='header'>
        <img class='logo' src='imagesss/logotipp.png' alt='logo'>
        <div class='your_nickname'>#</div>
        <img class='avatar' src='imagesss/luda.png'>
    </div>

    <?php

    ?>

    <div class="your_reiting">
        <div class="ava">
            <img class='your_avatar' src='imagesss/luda.png'>
        <div class="nickname">#</div>


        </div>


</div>
    <div class="bal">
        <div class='reit_plant'>Количество растений:</div>
        <div class='reit_plant1'>17 место</div>
        <div class='reit_poliv'>Регулярность поливок:</div>
        <div class='reit_poliv1'>5 место</div>
    </div>
    </div>
<div class="other" style="clear:both;">
     <h2 style="float: left; font-family: 'Raleway',sans-serif;
font-style: normal;
font-weight: 400;
font-size: 28px;
line-height: 33px;
color: #000000;
background: #F4E1E1;
border-radius: 10px;">Количество растений:</h2>
     <h2 style="float: right; font-family: 'Raleway',sans-serif;
font-style: normal;
font-weight: 400;
font-size: 28px;
line-height: 33px;
color: #000000;
background: #F4E1E1;
border-radius: 10px;">Регулярность поливок:</h2>
<div class="people">
    <p>1.<img src="imagesss/b1.png" width="80" height="80" style=" border-radius: 40px;" />Анна Н.</p>

    <p>2.<img src="imagesss/b2.png" width="80" height="80"  style=" border-radius: 40px;" />
        Наталья Е.</p>

    <p>3.<img src="imagesss/b3.png" width="80" height="80" style=" border-radius: 40px;"/>Нина Д.</p>
</div>



    </div>


    <h1 class="hey">Рейтинг в вашем регионе за месяц</h1>
</div>
<?php
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//require_once('scripts/Calendar.php');
//echo Calendar::getInterval(date('1.Y'), date('12.Y'), EventCreater::CreateEventFromEmail($_COOKIE['email']));
?>
</body>
</html>
