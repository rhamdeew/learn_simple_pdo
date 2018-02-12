<?php
include 'db.php';
$salt = 'azaza';

echo '<h1>Этот скрипт не входит в урок! Создан только для удобного заполнения БД юзерами</h1>';

if (!empty($_POST['login']) && !empty($_POST['password']) && !empty($dbh)) {
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $password = crypt(filter_var($_POST['password'], FILTER_SANITIZE_STRING), $salt);
    $prepared = $dbh->prepare("INSERT INTO users (login, password, created) VALUES (?,?,?)");
    $result = $prepared->execute(array($login, $password, date('Y-m-d H:i:s')));

    if ($result===true) {
        echo '<p>Юзер '.$login.' успешно добавлен!</p>';
    } else {
        var_dump($result);
        echo '<hr/>';
        var_dump($prepared->errorInfo());
    }
} else {
    echo "<form method='POST'>".PHP_EOL;
    echo "<p>".PHP_EOL;
    echo "<label for='login'>Логин </label><input name='login' type='text'>".PHP_EOL;
    echo "</p>".PHP_EOL;
    echo "<p>".PHP_EOL;
    echo "<label for='password'>Пароль </label><input name='password' type='text'>".PHP_EOL;
    echo "</p>".PHP_EOL;
    echo "<p>".PHP_EOL;
    echo "<input type='submit' value='Вход''>".PHP_EOL;
    echo "</p>".PHP_EOL;
    echo "</form>".PHP_EOL;
}
