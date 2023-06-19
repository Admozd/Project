<?php
session_start();
require("db_connect.php");
$login = $_POST['login'];
$password = $_POST['password'];
$md5_password = md5($password);
if (isset($_POST['login'])) {
    $query = $conn->query("SELECT * FROM news.users WHERE ((login = '{$login}') AND (password = '{$password}')) ");
    if ($row = $query->fetch()) {
        $_SESSION['user'] = $_POST['login'];
        $_SESSION['message'] = 'Вы успешно вошли в систему';
        header("Location: index.php");
        die();
    } else {
        $_SESSION['message'] = 'Вы ввели неверные данные!';
        header("Location: index.php?page=login");
        die();
    }
}



if ($_GET['logout'] == 1){
    session_unset();
    unset($_SESSION['user']);
    $_SESSION['message'] = 'Вы успешно вышли из системы';
    header("Location: index.php");
    die();
}