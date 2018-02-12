<?php
session_start();
session_destroy();

echo 'Вы вышли!<br/>';
echo '<a href="/">На главную</a>';