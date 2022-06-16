<?php 
  $name= 'products';
  $value = 'Lawn Chair';
  $expiration = time() + (60*60*24*365);
  setcookie($name, $value, $expiration);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Heyooo</h1>
  <?php
    if(isset($_COOKIE['products'])) {
      $typeOfCookie = $_COOKIE['products'];
      echo 'Are you still interested in ' . $typeOfCookie . '?';
    }
  
  
  
  ?>
  
</body>
</html>