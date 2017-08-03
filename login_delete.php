<?php
include "db.php";
include "functions.php";
include "includes/header.php";
DeleteRows();
?>
    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" />
            </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" />
            <div class="form-group">
              <select name="id" id="">
                <?php
                  showAllData();
                 ?>
              </select>
            </div>
            <input type="submit" name="submit" value="Delete" class="btn btn-primary"/>
<?php include "includes/footer.php";
