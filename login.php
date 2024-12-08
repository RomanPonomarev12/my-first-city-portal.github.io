<?php 
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];


if(empty($login) || empty($pass))
{
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
        echo require_once('indexVhod.php');

        }

    } else {
        echo "Нет такого пользователя";
    }
}
