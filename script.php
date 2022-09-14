<?php

$server = "127.0.0.1";
$login = "root";
$pass = "root";
$name_db = "full_table";

$link = mysqli_connect($server, $login, $pass, $name_db);
if ($link == False)
{
		echo "Соединение установлено";
}

?>