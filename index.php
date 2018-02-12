<?php
include 'template/_header.php';
?>
<?php
if (!empty($_POST['login']) && !empty($_POST['password'])) {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}
?>
        <h1>Заголовок</h1>

        <p>Текст главной страницы</p>

        <form action="" method="POST">
            <p>
                <label for="login"></label><input name="login" type="text">
            </p>
            <p>
                <label for="password"></label><input name="password" type="password">
            </p>
            <p>
                <input type="submit" value="Вход">
            </p>
        </form>
<?php
include 'template/_footer.php';
?>