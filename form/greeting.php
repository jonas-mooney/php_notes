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
    $name = 'Jonas';
    $age = 21;
    $colors = ['red', 'green', 'blue'];
    $names = ['first_name' => 'Maria', 'last_name' => 'Ramirez'];
    
    function isTired() {
      $tired = false;
      if ($tired == false) {
        echo '<h1>not</h1> ';
      }
    }
    
    function greeting($message) {
      echo $message;
    }

    $x = 300000000000;
    
    function printX() {
      global $x;
      echo $x;
    }

    printX();

    $counter = 0;
    while($counter <= 10) {
      echo $counter;
      $counter++;
    }

    echo "<h1>My name is $name </h1>";
    echo '<br>';
    echo "<h1>My age is $age </h1>";
    echo "<h1>I am " . isTired() . "tired</h1>";
    echo $colors[1];
    echo '<br>';
    echo $names['first_name'] . ' ' . $names['last_name'];

    
  ?>




  
</body>
</html>