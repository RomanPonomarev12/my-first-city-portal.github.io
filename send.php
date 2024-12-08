<?php

require_once('dbConnectZayavka.php');

$category = $_POST['category'];
$description = $_POST['description'];
$date = $_POST['date'];



if($description === ""){
    echo 'Заполните заявку';
} else{
    $sql = "INSERT INTO `ZayavkaUsers` (category,description,date) VALUES ('$category', '$description', '$date')";
    if ($conn -> query($sql) === TRUE){
        echo 'Заявка успешно отправлена';
                
    }
    else {
        echo "Ошибка" . $conn->error; 
    }
}



?>