<?php
?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>glavnaya</title>
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
        <div class='nickname'></div>
        <img class='avatar' src='imagesss/luda.png'>
    </div>

    <?php

    ?>
    <div class='plants-container'>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/palma.png'>
            <div class='plant-box_name' >Бамбуковая пальма</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>5 апреля 2022</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'>2 мая</div>
        </div>
        <div class='planka'></div>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/palma.png'>
            <div class='plant-box_name' >Бамбуковая пальма</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>5 апреля 2022</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'>2 мая</div>
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
