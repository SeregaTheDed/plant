<?php
require_once('scripts/CheakPostToRedirect.php');
CheakRedirects();
if (isset($_POST['add-end'])) {
    //ini_set('error_reporting', E_ALL);
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    require_once('scripts/PhotoDownloader.php');
    $path = 'imagesss/null.png';
    $name = $_POST['name'];
    $date = $_POST['date'];
    $interval = $_POST['poliv'];
    $filename =  $_FILES['add_photo']['name'];
    $expected = PhotoDownloader::can_upload($_FILES['add_photo']);
    if ($expected === true)
    {
        require_once('scripts/Database.php');
        try
        {
            $db = new Database();
            $path = PhotoDownloader::make_upload($_FILES['add_photo']);
            $db->addPlant($name, $_COOKIE['email'], $date, $interval, $path);
            header('Location: Glavnaya.php');
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }


    }
    else
    {
        echo $expected;
    }

}
/*
        <input type="file" name="add_photo" class="add_photo" value="+">
        <button type="submit" name="add-end" class="add_end">Добавить</button>
        <h1 class="create">Создать карточку растения:</h1>
        <input name="name" type="text" class="type_btn" placeholder="Название растения">
        <input name="date" type="text" class="date_btn" placeholder="Дата посева(YYYY-MM-DD)">
        <input name="poliv" type="text" class="poliv_btn" placeholder="Интервал поливания">
 */
//$db->addPlant($name, $email, "2022-4-24", '4','.null.png');
?>
<!doctype html>
<html lang='ru'>
<head>
    <meta charset='utf-8'/>
    <title>Добавить новое растение</title>
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
    <form method="post" class="add_plant" enctype="multipart/form-data">
        <a class="block1"></a>
        <input type="file" name="add_photo" class="add_photo" value="+">
        <button type="submit" name="add-end" class="add_end">Добавить</button>
        <h1 class="create">Создать карточку растения:</h1>
        <input name="name" type="text" class="type_btn" placeholder="Название растения">
        <input name="date" type="text" class="date_btn" placeholder="Дата посева(YYYY-MM-DD)">
        <input name="poliv" type="text" class="poliv_btn" placeholder="Интервал поливания">
        <?php //echo $path; <?php echo" 'style='background: url($path)' " ?>
    </form>


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
