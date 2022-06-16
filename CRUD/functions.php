<?php
  include 'db.php';
  function showData() {
    global $connection;
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILED');
    }
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function create() {
    global $connection;
      $username = $_POST['username'];
      $password = $_POST['password'];

      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      // first param - connection, second - what you want to escape.
      // Cleans up parenthesis and apostraphies etc to prevent sql injection.

      $hashFormat = '$2y$10$';
      $salt = '1q2w3e4r5t4r5t6y9o0uvv';
      $hashF_and_salt = $hashFormat . $salt;
      $password = crypt($password, $hashF_and_salt);

      $id = $_POST['id'];
      $occupation = $_POST['occupation'];
  
      include 'db.php';
      $query = "INSERT INTO users(username, password, id, occupation)";
      $query .= "VALUES ('$username', '$password', '$id', '$occupation')";
      // .= concatenating variables
      $result = mysqli_query($connection, $query);
      if(!$result) {
        die('Query FAILURE');
      }
  }

  function update() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id= $id ";
    // no quotes around id because it is an integer
    
    $result = mysqli_query($connection, $query);
    echo $result;
    if(!$result) {
      die("QUERY FAILED" . mysqli_error($connection));
    }
    else {
      echo 'QUERY SUCCESSFUL';
    }
  }

  function deleteRows() {
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id= $id ";
    // no quotes around id because it is an integer
    
    $result = mysqli_query($connection, $query);
    echo $result;
    if(!$result) {
      die("QUERY FAILED" . mysqli_error($connection));
    }
    else {
      echo 'QUERY SUCCESSFUL';
    }
  }

?>