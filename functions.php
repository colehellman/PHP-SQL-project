<?php
include "db.php";

function CreateRows(){
  global $connection;
  if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Query failed' . mysqli_error());
  }
  else{
    echo "Record Created!";
  }
}
}

function showAllData(){
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Query failed' . mysqli_error());
  }
while($row=mysqli_fetch_assoc($result)){
  $id = $row['id'];
  echo "<option value='$id'>$id</option>";
}
}

function UpdateTable(){
  if(isset($_POST['submit'])){
  global $connection;
  $username =$_POST['username'];
  $password=$_POST['password'];
  $id=$_POST['id'];
  $query = "UPDATE users SET username  = '$username', password = '$password' WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Query failed" . mysqli_error($connection));
  }
  else{
    echo "Record Updated!";
  }
}
}

function DeleteRows(){
  if(isset($_POST['submit'])){
  global $connection;
  $username =$_POST['username'];
  $password=$_POST['password'];
  $id=$_POST['id'];
  $query = "DELETE FROM users WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die("Query failed" . mysqli_error($connection));
  }
  else{
    echo "Record Deleted!";
  }
}
}

function ReadRows(){
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  if(!$result){
    die('Query failed' . mysqli_error());
  }
  while ($row=mysqli_fetch_assoc($result)) {
    print_r($row);
  }
}
