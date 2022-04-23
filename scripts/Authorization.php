<?php
require_once('Database.php');
class Authorization
{
    /**
     * Пытается зарегистрировать пользователя.
     * При обнаружении пользователя с такой же почтой выкидывает ошибку
     * @param string $name Имя пользователя
     * @param string $email Почта пользователя
     * @param string $pass Пароль, который будет захеширован
     * @return void
     */
    public static function Register(string $name, string $email, string $pass)
    {
        $db = new Database();
        $prev = $db->prepare("INSERT INTO users(name, email, hash) VALUE(?, ?, ?)");
        $pass = password_hash($pass, PASSWORD_BCRYPT);
        $prev->bind_param('sss', $name, $email, $pass);
        $prev->execute();
    }

    /**
     * Попытка авторизовать пользователя
     * @param string $email
     * @param string $pass
     * @return bool
     */
    public static function Authorization(string $email, string $pass) : bool
    {
        $db = new Database();
        $user = $db->getUserByEmail($email)->fetch_assoc();

        if ($user === null)
        {
            return false;
        }
        if (!password_verify($pass, $user['hash']))
        {
            return false;
        }
        $name = $user['name'];
        $email = $user['email'];
        setcookie('name', $name, time()+420);
        setcookie('email', $email, time()+420);
        //MyPrint::PrintBeutiful("Конец авторизации");
        return true;
    }
}
