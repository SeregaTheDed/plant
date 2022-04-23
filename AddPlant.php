<?php
?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Addplant</title>
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
        <div class='nickname'></div>
        <img class='avatar' src='imagesss/luda.png'>
    </div>
    <div class="add_plant">
        <a class="block1"></a>
        <button type="submit" name="add_photo" class="add_photo">+</button>
        <button type="submit" name="add-end" class="add_end">Добавить</button>
        <h1 class="create">Создать карточку растения:</h1>
        <input name="type" type="text" class="type_btn" placeholder="Название растения">
        <input name="date" type="text" class="date_btn" placeholder="Дата посева">
        <input name="poliv" type="text" class="poliv_btn" placeholder="Интервал поливания">

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
