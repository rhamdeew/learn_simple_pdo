<?php
include 'core.php';
if (empty($_SESSION['login'])) {
    echo 'Доступ запрещен!';
    die();
}
include 'template/_header.php';
?>
        <h1>Заголовок</h1>

        <p>Текст страницы 2</p>

<?php
include 'template/_footer.php';
?>