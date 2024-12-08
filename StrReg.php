<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Алкоголики</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  
    
<?php
 require('header.php');
?>

      <main>
    <form action="register.php" method="post">

    <input type="text" placeholder="Логин" name="login">
    <input type="text" placeholder="Пароль" name="pass">
    <input type="text" placeholder="Повторите пароль" name="reapeatpass">
    <input type="text" placeholder="email" name="email">
    <button type="submit" class="btn btn-warning">Зарегестрироваться</button>


    </form>


        
 



   
          


































        
      </main>






























    
      <?php
 require('footer.php');
?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>