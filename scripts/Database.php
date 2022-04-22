<?php
require_once('MyPrint.php');
class Database extends mysqli
{
    function __construct()
    {
        parent::__construct('127.0.0.1', 'root', '154157144', 'plant');
    }

    /**
     * Возвращает пользователя или NULL, если не найден
     * @param string $email
     * @return mysqli_result|null
     */
    public function getUserByEmail(string $email)
    {
        $prev = self::prepare("SELECT * FROM users WHERE email = ?");
        $prev->bind_param('s',$email);
        $prev->execute();
        $res = $prev->get_result();

        if ($res === false)
            return null;
        if ($res->num_rows != 1)
            throw new mysqli_sql_exception("SQL Injection", -1, $prev);
        return $res;

    }
    function __destruct()
    {
        self::close();
    }
}