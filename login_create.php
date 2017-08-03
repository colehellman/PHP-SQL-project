<?php include "db.php";
include "functions.php";
include "includes/header.php";
CreateRows();
 ?>
    <div class="container">
      <div class="col-sm-6">
        <h1 class="text-center">Create</h1>
        <form action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" />
            </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" />
            <input type="submit" name="submit" value="Create" class="btn btn-primary"/>
          </div>
        </form>
<?php include "includes/footer.php";?>
