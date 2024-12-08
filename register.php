<?php
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$reapeatpass = $_POST['reapeatpass'];
$email = $_POST['email'];

if (empty($login) || empty($pass) || empty($reapeatpass) || empty($email)){
    echo 'Заполните все поля';
}else
{
if($pass != $reapeatpass){
    echo 'Пароли не совпадают';
} else{
    $sql = "INSERT INTO `users` (login,password,email) VALUES ('$login', '$pass', '$email')";
    if ($conn -> query($sql) === TRUE){
        echo require_once('indexVhod.php');
                
    }
    else {
        echo "Ошибка" . $conn->error; 
    }
}



}


