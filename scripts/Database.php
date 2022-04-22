<?php
class Database extends mysqli
{
    function __construct()
    {
        parent::__construct('127.0.0.1', 'root', '154157144', 'plant');
    }
    function __destruct()
    {
        self::close();
    }
}