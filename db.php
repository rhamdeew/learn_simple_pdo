<?php

$dbname = 'test';
$dbuser = 'test';
$dbpass = 'test';
$dbhost = 'localhost';

try {
    $dbh = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
} catch (PDOException $e) {
    print "Ошибка подключения к БД!<br/>" . $e->getMessage() . "<br/>";
    die();
}