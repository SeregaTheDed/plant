<?php
if (isset($_COOKIE['email']))
{
    header('Location: Glavnaya.php');
    exit();
}
if (isset($_POST['submit_reg'])) {
    header('Location: Registration.php');
    exit();
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
                <h3 class="mail">E-mail</h3>
                <h3 class="log">Пароль</h3>
                <h3 class="no">Нет аккаунта?</h3>
                <input name="email" type="text" class="InputField1" placeholder="E-mail">
                <input name="pass" type="text" class="InputField2" placeholder="Пароль">
                <button type="submit" name="submit_auth" class="InputButton">Войти</button>
                <button type="submit" name="submit_reg" class="InputButtonno">Зарегистрироваться</button>
                <?php
                require_once('scripts/Authorization.php');
                if (isset($_POST['submit_auth'])) {
                    try {
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        if (Authorization::Authorization($email, $pass) == true)
                        {
                            header('Location: Glavnaya.php');
                        } else {
                            echo "Неверный пароль";
                        }

                    } catch (Exception $e) {
                        echo "Проверьте входные данные";
                    }

                }
                ?>
            </a>
        </form>
        <hr style="position: absolute;
width: 430.01px;
height: 0px;
left: 470px;
top: 460px;

border: 1px solid #817E7E;">
    </div>

</div>


</body>
</html>
