<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = ['Jimbo', 'Alice', 'Bobby'];

    if(!in_array($username, $users)) {
      echo 'You are not a allowed';
    }
    else {
      echo 'Welcome!';
    }


  }

  if(isset($_GET['submit'])) {
    $username = $_POST['username'];

    echo $username;
  }

?>