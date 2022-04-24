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

    /** Получаем все растения по email
     * @param string $email
     * @return mysqli_result|null
     */
    public function getPlantsByEmail(string $email)
    {
        $prev = self::prepare("SELECT * FROM your_plants WHERE email = ?");
        $prev->bind_param('s',$email);
        $prev->execute();
        $res = $prev->get_result();
        if ($res === false)
            return null;
        return $res;
    }

    public function addPlant(string $name, string $email, string $date, string $interval, string $pathToImage)
    {
        $prev = self::prepare("INSERT INTO your_plants(name, email, planting_date, watering_interval, photo) VALUE(?, ?, ?, ?, ?)");
        $prev->bind_param('sssss', $name, $email, $date, $interval, $pathToImage);
        $prev->execute();
    }

    function __destruct()
    {
        self::close();
    }
}