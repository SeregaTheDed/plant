<?php

?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Blog</title>
    <link rel='stylesheet' href='plant.css'/>
    <link rel='stylesheet' href='style.css'/>

    <link href='https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap'
          rel='stylesheet'>
</head>
<body class='content'>
<form method='post' class='aleft'>
    <input type='submit' name='Glavnaya' class='aleft__buttons' style='cursor: pointer;' value='Мои растения'>
    <input type='submit' name='Katalog' class='aleft__buttons' style='cursor: pointer;' value='Каталог'>
    <input type='submit' name='Blog' class='aleft__buttons aleft__buttons_selected' style='cursor: pointer;' value='Блог'>
    <input type='submit' name='Reiting' class='aleft__buttons ' style='cursor: pointer;' value='Рейтинг'>
    <input type='submit' name='Karta' class='aleft__buttons ' style='cursor: pointer;' value='Карта'>




</form>
<div class='main'>
    <div class='header'>
        <img class='logo' src='imagesss/logotipp.png' alt='logo'>
        <div class='nickname'>#</div>
        <img class='avatar' src='imagesss/luda.png'>
    </div>

    <?php

    ?>
    <div class='plants-container'>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/fialka.png'>
            <div class='plant-box_name' >Фиалки зимой: правила ухода</div>
            <div class='plant-box_description'>Фиалки при правильном уходе могут цвести до 9 месяцев. Главное соблюдать элементарные правила ухода.</div>
            <div class='plant-box_person'>Мария В.</div>
            <div class='plant-box_date'>12.03.2021</div>
            <input type='submit' name='More' class='More' style='cursor: pointer;' value='Подробнее...'>
        </div>
        <div class='planka'></div>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/fialka.png'>
            <div class='plant-box_name' >Фиалки зимой: правила ухода</div>
            <div class='plant-box_description'>Фиалки при правильном уходе могут цвести до 9 месяцев. Главное соблюдать элементарные правила ухода.</div>
            <div class='plant-box_person'>Мария В.</div>
            <div class='plant-box_date'>12.03.2021</div>
            <input type='submit' name='More' class='More' style='cursor: pointer;' value='Подробнее...'>
        </div>

    </div>
    <h1 class="hey">Делитесь советами и лайфхаками в блоге!</h1>

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
