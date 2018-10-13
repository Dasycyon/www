<?php  
session_start();  
$dbhost = "localhost"; // Адрес сервера MySQL. На локальном сервере этот параметр всегда будет 'localhost', но на хостинге он соответствует адресу хостера.
$dbname = "garaj"; // Имя базы данных 
$dbuser = "root"; // Пользователь базы данных
$dbpass = "qwerty123"; // Пароль пользователя базы данных  
 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Ошибка MySQL: " . mysqli_connect_error());  
mysqli_query ($conn, "SET NAMES utf8");
mysqli_query ($conn, "set character_set_client='utf8'");
mysqli_query ($conn, "set character_set_results='utf8'");
mysqli_query ($conn, "set collation_connection='utf8_general_ci'");
?>