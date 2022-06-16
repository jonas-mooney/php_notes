<?php
  include 'db.php';
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILURE');
    }
?>

<?php include 'includes/head.php'?>
<body>
  <?php

  while($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
    <?php
    print_r($row);
    ?>
    </pre>
    <?php
  }

  ?>
  
</body>
</html>