<?php
  class Car {
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 'V8';
    var $color = 'Rojo';

    // public - Accessible anywhere within project.
    // protected - Only used within class and inheritors.
    // private - Only used by declaring class.
    // var - Accessible anywhere within project.

    function moveWheels() {
      echo 'Motor 80%';
      echo $this->wheels;
    }
  }

  $bmw = new Car();
  $ford = new Car($wheels = 60);

?>
<!-- Call class methods using $bmw->moveWheels();  -->


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



  ?>
</body>
</html>
