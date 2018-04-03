<?php


// Производим попытку подключения к серверу MySQL:
if (!mysql_connect($host, $user, $password))
{
echo "<h2>Облом!</h2>";
exit;
}

// Выбираем базу данных:
mysql_select_db($db);

?>