<?php
require_once('scripts/CheakPostToRedirect.php');
CheakRedirects();
?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Главная</title>
    <link rel='stylesheet' href='plant.css'/>
    <link rel='stylesheet' href='style.css'/>
    <link rel='stylesheet' href='saroja.css'/>
    <link href='https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap'
          rel='stylesheet'>
</head>
<body class='content'>
<form method='post' class='aleft'>
    <input type='submit' name='Glavnaya' class='aleft__buttons aleft__buttons_selected' style='cursor: pointer;'
           value='Мои растения'>
    <input type='submit' name='Katalog' class='aleft__buttons' style='cursor: pointer;' value='Каталог'>
    <input type='submit' name='Blog' class='aleft__buttons' style='cursor: pointer;' value='Блог'>
    <input type='submit' name='Reiting' class='aleft__buttons ' style='cursor: pointer;' value='Рейтинг'>
    <input type='submit' name='Karta' class='aleft__buttons ' style='cursor: pointer;' value='Карта'>


</form>
<div class='main'>
    <div class='header'>
        <img class='logo' src='imagesss/logotipp.png' alt='logo'>
        <div class='nickname'><?php echo $_COOKIE['name'] ?></div>
        <img class='avatar' src='imagesss/luda.png'>
    </div>
    <a class='plant-add' href='AddPlant.php'>Добавить растение ⊕</a>
    <div class='plants-container'>
        <?php
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        require_once('scripts/Database.php');
        $db = new Database();
        $res = $db->getPlantsByEmail($_COOKIE['email']);
        // $res->num_rows;
        if ($res->num_rows == 0) {
            echo "
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/null.png'>
            <div class='plant-box_name'>Имя твоего растения</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>Какой-то день</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'>Какой-то день</div>
        </div>
        ";
        } else {
            $index = 0;
            foreach ($res as $value) {
                $name = $value['name'];
                $interval = $value['watering_interval'];
                $start_watering = date_create($value['planting_date'])->format('d.m.Y');
                $next_watering = date_create($value['planting_date'])->format('d.m.Y');
                for ($i = 1; $i <= 100; $i++) {
                    $new_date = date_create($value['planting_date'])->add(new DateInterval("P" . ($interval * $i) . "D"));
                    if (new DateTime(date("Y-m-d")) <= $new_date) {
                        $next_watering = $new_date;
                        break;
                    }
                }
                $next_watering = $next_watering->format('d.m');
                $path = $value['photo'];
                if ($path == null) {
                    //require_once ('imagesss/null.png');
                    $path = 'imagesss/null.png';
                }
                echo "
        <div class='plant-box'>
            <img class='plant-box_image' src=$path>
            <div class='plant-box_name'>$name</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>$start_watering</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'> $next_watering</div>
        </div>
        ";
                if ($index != $res->num_rows)
                    echo "<div class='planka'></div>";
                $index++;
            }
        }
        ?>
    </div>
    <!--
    <div class='plants-container'>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/palma.png'>
            <div class='plant-box_name'>Бамбуковая пальма</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>5 апреля 2022</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'>2 мая</div>
        </div>
        <div class='planka'></div>
        <div class='plant-box'>
            <img class='plant-box_image' src='imagesss/palma.png'>
            <div class='plant-box_name'>Бамбуковая пальма</div>
            <div class='plant-box_date-planting'>Дата посадки:</div>
            <div class='plant-box_date-planting_date'>5 апреля 2022</div>
            <div class='plant-box_date-watering'>Следующий полив:</div>
            <div class='plant-box_date-watering_date'>2 мая</div>
        </div>
    </div>
    -->


</div>
<div style="grid-column: 2; grid-row: 2">
    <?php
    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    require_once('scripts/Calendar.php');
    echo Calendar::getInterval(date('4.Y'), date('6.Y'), EventCreater::CreateEventFromEmail($_COOKIE['email']));
    ?>
</div>
</body>
</html>
