<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Городской портал</title>
    <link rel="stylesheet" href="styles/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

    <style> 
   



        table { 
            width: 100%; 
            max-width: 600px; 
            margin: 20px; 
            border-collapse: collapse; 
            background-color: white; 
            box-shadow: 0 0 10px rgb(255, 165, 0); 
            border-radius: 8px; 
            overflow: hidden; 
        } 

        th, td { 
            padding: 15px; 
            text-align: left; 
            border-bottom: 1px solid #ddd; 
        } 

        th { 
            background-color: rgb(255, 165, 0); 
            color: white; 
        } 

        tr:hover { 
            background-color: #f5f5f5; 
        } 

        @media (max-width: 600px) { 
            th, td { 
                display: block; 
                width: 100%; 
                box-sizing: border-box; 
            } 

            th { 
                text-align: center; 
            } 
        } 
    </style> 



</head>
<body>
  
    
<?php
 require('headerVhod.php');
?>

<main>

<?php 
// Подключение к базе данных (замените параметры на ваши) 
$servername = "MySQL-8.2";
$username = "root";
$password = "";
$dbname = "zayavkaUsers";

$conn = new mysqli($servername, $username, $password, $dbname); 

// Проверка соединения 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

// SQL-запрос для получения данных 
$sql = "SELECT id, category, description, date FROM `ZayavkaUsers`"; 
$result = $conn->query($sql); 

if ($result->num_rows > 0) { 
    // Вывод данных в таблицу 
    echo '<table>'; 
    echo '<thead><tr><th>ID</th><th>Категория</th><th>Описание</th><th>Дата</th></tr></thead>'; 
    echo '<tbody>'; 

    while ($row = $result->fetch_assoc()) { 
        echo '<tr>'; 
        echo '<td>' . $row['id'] . '</td>'; 
        echo '<td>' . $row['category'] . '</td>'; 
        echo '<td>' . $row['description'] . '</td>'; 
        echo '<td>' . $row['date'] . '</td>'; 
        echo '</tr>'; 
    } 

    echo '</tbody></table>'; 
} else { 
    echo "0 результатов"; 
} 

$conn->close(); 
?> 








</main>


<?php
 require('footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>







</body>
</html>