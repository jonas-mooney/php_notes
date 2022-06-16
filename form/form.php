<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = ['Jimbo', 'Alice', 'Bobby'];

    if(!in_array($username, $users)) {
      echo 'You are not a allowed';
    }

  }

?>


  <form action="form.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <br>
    <input type="submit" name="submit">


  </form>