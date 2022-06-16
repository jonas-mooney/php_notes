<?php
  include 'functions.php';
  if(isset($_POST['submit'])) {
    create();
  }
?>

<?php include 'includes/head.php'?>
<body>
<form action="login_C.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="id" placeholder="ID">
    <input type="text" name="occupation" placeholder="Occupation">
    <br>
    <input type="submit" name="submit">
  </form>
  
</body>
</html>