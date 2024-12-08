<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Городской портал</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>
<?php
 require('headerVhod.php');
?>

<main>

<form action="send.php" method="post">


<select type="text" name="category" >
    <option>Реставрация и восстановление</option>
    <option>Ремонт дорог</option>
    <option>Вывоз мусора</option>
</select>
<input type="text" placeholder="Описание" name="description">
<input type="date" name="date" value="2018-07-22" min="2018-01-01" max="2025-12-31" />

<button class="btn btn-warning" type="submit" value="Оставить заявку">Оставить заявку</button> 



</form>

</main>



<?php
 require('footer.php');
?>
