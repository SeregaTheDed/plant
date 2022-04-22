<?php

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Plant</title>
    <link rel="stylesheet" href="plant.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
</head>
<body>
<div class="Wrapper">
    <div class="intro">
        <form  style="margin-top: 0px" method="post" class="RegistrationForm">
            <a class="block" href="">
                <h3 class="FIO">ФИО</h3>
                <h3 class="MAIL">E-mail</h3>
                <h3 class="PASS">Пароль</h3>
                <h3 class="PASS2">Повторите пароль</h3>
                <input  name="fio" type="text" class="fio" placeholder="ФИО">
                <input  name="email" type="text" class="email" placeholder="Логин">
                <input  name="pass" type="text" class="pass" placeholder="Пароль">
                <input  name="pass2" type="text" class="pass2" placeholder="Повторите пароль">
                <button type="submit" name="submit_auth" class="Registr">Зарегистрироваться</button>
            </a>
        </form>

    </div>

</div>


</body>
</html>

