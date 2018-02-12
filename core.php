<?php
session_start();

$login = 'vasya';
$password = '123456';

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    if ($_POST['login']==$login && $_POST['password']==$password) {
        $_SESSION['login'] = $_POST['login'];
    }
}

if (!empty($_SESSION['login'])) {
    echo 'Привет, '.$_SESSION['login'].'!';
}