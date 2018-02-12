<?php
include 'core.php';
include 'template/_header.php';
?>
        <h1>Заголовок</h1>

        <p>Текст главной страницы</p>

        <form action="" method="POST">
            <p>
                <label for="login">Логин </label><input name="login" type="text">
            </p>
            <p>
                <label for="password">Пароль </label><input name="password" type="password">
            </p>
            <p>
                <input type="submit" value="Вход">
            </p>
        </form>
<?php
include 'template/_footer.php';
?>