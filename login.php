<?php
if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $connection = mysqli_connect('localhost', 'root','', 'udemy');
  if($connection){
    echo "We are connected";
  }
  else{
    die("db connection failed");
  }
}
//   if($username && $password){
//     echo $username . $password;
//   }
//   else{
//     echo "NOOOOOOO";
//   }
// }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "UTF-8" />
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <body>
    <div class="container">
      <div class="col-sm-6">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" />
            </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" />
            <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>
          </div>
        </form>
      </div>
    </div>
  </body>
</head>
</html>
