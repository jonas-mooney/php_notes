<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php
  if(isset($_POST['submit'])) {
    update();
  }
?>

<?php include 'includes/head.php'?>
<body>

<form action="login_U.php" method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <br>
    <div>
      <select name="id" id="">
        <?php 
            showData();
          ?>
      </select>
      <input type="submit" name="submit" value="UPDATE">
    </div>



  </form>
  
</body>
</html>