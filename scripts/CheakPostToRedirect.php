<?php

function CheakRedirects()
{
    if (!isset($_COOKIE['email'])) {
        header('Location: Autorization.php');
        exit();
    }
    if (!isset($_COOKIE['email'])) {
        header('Location: Autorization.php');
        exit();
    }
    if (isset($_POST['Reiting'])) {
        header('Location: Reiting.php');
        exit();
    }
    if (isset($_POST['Blog'])) {
        header('Location: Blog.php');
        exit();
    }
    if (isset($_POST['Katalog'])) {
        header('Location: Katalog.php');
        exit();
    }
    if (isset($_POST['Glavnaya'])) {
        header('Location: Glavnaya.php');
        exit();
    }
    if (isset($_POST['Karta'])) {
        header('Location: MapMain.php');
        exit();
    }
}