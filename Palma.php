<?php

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Palm</title>
    <link rel="stylesheet" href="plant.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="Wrapper1">
    <div class="glavn_palm">

            <a class="flower1_palm" href="#"></a>

                <p class="date1">Дата посадки:
                <p class="date1">Следующий полив:
                <p class="numb1">5 апреля 2022 г.
                <p class="numbb1">2 мая
<p class="text">Бамбуковая пальма предпочитает мягкое<br> освещение с небольшим затемнением.<br> Опрыскивать растение лучше всего <br>вечером и утром, полив производится <br> после подсыхания верхнего слоя грунта.</p>

            <nav class="nav">
                <a class="palm" href="#">Бамбуковая пальма</a>


            <a class="button1" href="Glavnaya.php" ><nobr>Мои растения</nobr></a>
            <a class="button2" href="Katalog.php">Каталог</a>
            <a class="button3" href="Blog.php">Блог</a>
            <a class="button4" href="Blog.php">Рейтинг</a>
        </nav>
        <img class="fl1" src="imagesss/palma.png" width="155" height="110">


    </div>

<h1 class="name">Людмила</h1>
    <img class="ludmila" src="imagesss/luda.png" width="100" height="100">


    <h3 class="pol">Всего поливок:</h3>
    <h3 class="vipolneno">Выполнено:</h3>
    <h3 class="propysheno">Пропущено:</h3>
    <p class="pol1">49
    <p class="vipolneno1">47
    <p class="propysheno1">2

    <div class="container">
        <?php
        require_once('scripts/Calendar.php');
        $events = array(
            '10.05.2022'    => 'Полить цветы'
        );
        echo Calendar::getInterval(date('4.2022'), date('6.2022'));
        ?>
    </div>
    <a class="Planttrecker" href="Glavnaya.php" >
        <img style="vertical-align: middle; width:300px; height:70px; " src="imagesss/logotipp.png" alt="" />
    </a>
</div>

</body>
</html>
