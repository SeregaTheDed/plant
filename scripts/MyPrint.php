<?php
class MyPrint
{
    public static function PrintBeutiful($variable)
    {
        echo '<pre>';
        var_dump($variable);
        echo '</pre>';
    }
}