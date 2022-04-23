<?php
if (!isset($_COOKIE['email'])) {
    header('Location: Autorization.php');
    exit();
}
//require_once('scripts/MyPrint.php');
//MyPrint::PrintBeutiful($_POST);
if (isset($_POST['Reiting'])) {
    header('Location: Reiting.php');
    exit();
}
if (isset($_POST['Blog'])) {
    header('Location: Blog.php');
    exit();
}
if (isset($_POST['Katalog'])) {
    header('Location: Katalog.php');
    exit();
}
if (isset($_POST['Glavnaya'])) {
    header('Location: Glavnaya.php');
    exit();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>glavnaya</title>
    <link rel="stylesheet" href="plant.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="saroja.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap"
          rel="stylesheet">
</head>
<body class="content">
<form method="post" class="aleft">
        <input type="submit" name="Reiting" class="aleft__buttons " style="cursor: pointer;" value="Рейтинг">
        <input type="submit" name="Blog" class="aleft__buttons" style="cursor: pointer;" value="Блог">
        <input type="submit" name="Katalog" class="aleft__buttons" style="cursor: pointer;" value="Каталог">
        <input type="submit" name="Glavnaya" class="aleft__buttons aleft__buttons_selected" style="cursor: pointer;" value="Мои растения">
</form>
<div class="main">
    <div class="header">
        <img class="logo" src="imagesss/logotipp.png" alt="logo">
        <div class="nickname"><?php echo $_COOKIE['name']?></div>
        <img class="avatar" src="imagesss/luda.png">
    </div>
    <a class="plant-add" href="">Добавить растение ⊕</a>
    <?php

    ?>
    <div class="plants-container">
        <div class="plant-box">
            <img class="plant-box_image" src="imagesss/palma.png">
            <div class="plant-box_name" >Бамбуковая пальма</div>
            <div class="plant-box_date-planting">Дата посадки:</div>
            <div class="plant-box_date-planting_date">5 апреля 2022</div>
            <div class="plant-box_date-watering">Следующий полив:</div>
            <div class="plant-box_date-watering_date">2 мая</div>
        </div>
        <div class="planka"></div>
        <div class="plant-box">
            <img class="plant-box_image" src="imagesss/palma.png">
            <div class="plant-box_name" >Бамбуковая пальма</div>
            <div class="plant-box_date-planting">Дата посадки:</div>
            <div class="plant-box_date-planting_date">5 апреля 2022</div>
            <div class="plant-box_date-watering">Следующий полив:</div>
            <div class="plant-box_date-watering_date">2 мая</div>
        </div>
    </div>


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
