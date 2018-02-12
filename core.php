<?php
session_start();

include 'db.php';

$login = 'vasya';
$password = '123456';
$salt = 'azaza';

if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($dbh)) {
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $password = crypt(filter_var($_POST['password'], FILTER_SANITIZE_STRING), $salt);

    $result = $dbh->prepare('SELECT id,login,password FROM users WHERE login = ? LIMIT 1');
    $result->bindParam(1, $login, PDO::PARAM_STR);
    $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if(!empty($row)) {
        if (hash_equals($password, $row['password'])) {
            $_SESSION['login'] = $_POST['login'];
        } else {
            echo '<h3 style="color:red;">Неправильный логин или пароль!</h3>';
        }
    } else {
        echo '<h3 style="color:red;">Юзер не существует!</h3>';
    }
}

if (!empty($_SESSION['login'])) {
    echo 'Привет, '.$_SESSION['login'].'!<br/>';
    echo '<a href="/logout.php">Выход</a>';
}