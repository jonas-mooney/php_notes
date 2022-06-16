<?php
  class Car {
    static $wheels = 4;

    public static function moveWheels() {
      echo 'Motor 80%';
      echo Car::$wheels;
    }
  }

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
  <?php 

  echo Car::$wheels;
  // Static Data is attatched to the class and can only be called
  // through that relation.
  Car::moveWheels();
  // in order to call this static function, it had to be made public on line 5.

  ?>
</body>
</html>
