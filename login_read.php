<?php include "db.php";
include "functions.php";
  include "includes/header.php";
 ?>
    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Read</h1>
        <pre>
          <?php
            ReadRows();
          ?>
        </pre>
<?php include "includes/footer.php"; ?>
