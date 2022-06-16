<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php
  if(isset($_POST['submit'])) {
    deleteRows();
  }
?>

<?php include 'includes/head.php'?>
<body>
<form action="login_D.php" method="POST">
    <br>
    <div>
      <select name="id" id="">
        <?php 
            showData();
          ?>
      </select>
      <input type="submit" name="submit" value="DELETE">
    </div>
  </form>
</body>
</html>