<?php
require_once("scripts/MyPrint.php");
//MyPrint::PrintBeutiful($_COOKIE['email']);
if (isset($_COOKIE['email'])) {
    header('Location: Glavnaya.php');
    exit();
}
require_once('scripts/Authorization.php');
if (isset($_POST['submit_reg'])) {
    try {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        if ($pass == $pass2) {
            try {
                Authorization::Register($name, $email, $pass);
                header('Location: Autorization.php');
            } catch (Exception) {
                echo "Пользователь с такой почтой уже существует";
            }
        }


    } catch (Exception $e) {
        echo "Проверьте входные данные";
    }

}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Plant</title>
    <link rel="stylesheet" href="plant.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="Wrapper">
    <div class="intro">
        <form style="margin-top: 0px" method="post" class="RegistrationForm">
            <a class="block">
                <h3 class="FIO">Имя</h3>
                <h3 class="MAIL">E-mail</h3>
                <h3 class="PASS">Пароль</h3>
                <h3 class="PASS2">Повторите пароль</h3>
                <input name="name" type="text" class="fio" placeholder="Имя">
                <input name="email" type="text" class="email" placeholder="E-mail">
                <input name="pass" type="text" class="pass" placeholder="Пароль">
                <input name="pass2" type="text" class="pass2" placeholder="Повторите пароль">
                <button type="submit" name="submit_reg" class="Registr">Зарегистрироваться</button>
                <?php
                if (isset($_POST['submit_reg'])) {
                    try {
                        $pass = $_POST['pass'];
                        $pass2 = $_POST['pass2'];
                        if ($pass != $pass2) {
                            echo "Пароли не совпадают";
                            exit();
                        }
                    }
                    catch (Exception)
                    {
                        echo "Проверьте входные данные";
                    }

                }
                ?>
            </a>
        </form>

    </div>

</div>


</body>
</html>

