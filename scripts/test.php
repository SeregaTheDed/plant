<?php
/*
Как использовать календарь:
Скопировать строку в нужное место.
Изменить циферки на какие нужны:
    В первом случае первая циферка - месяц(1..12), вторая - год
    Во втором случае первое - месяц.год начала, второе - месяц.год конца
<?php echo Calendar::getMonth(date('3'), date('2032')); ?>
<?php echo Calendar::getInterval(date('1.2022'), date('12.2022')); ?>
 */
require_once('Database.php');
require_once('Calendar.php');
require_once('MyPrint.php');
$db = new Database();
$name = 'test';
$pass = password_hash('12345', PASSWORD_BCRYPT) ;
$email = 'test@test.ru';
$prev = $db->prepare("INSERT INTO users(name, email, hash) VALUE(?, ?, ?)");
$prev->bind_param('sss', $name, $email, $pass);
$prev->execute();












//$events = array(
//    '10.11.2022'    => 'www.google.com'
//);
//echo Calendar::getInterval(date('1.2022'), date('12.2022'), $events);