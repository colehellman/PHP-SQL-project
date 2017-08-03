<?php
$connection = mysqli_connect('localhost', 'root','', 'udemy');
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if(!$result){
  die('Query failed' . mysqli_error());
}
?>
