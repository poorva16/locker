<?php
include 'database.php';
    $fname=$fname1=$lname=$lname1=$password=$password1="";
session_start(); 

  $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];

$result=mysql_query("SELECT * FROM register WHERE fname='$fname' and lname='$lname' and password='$password'");

$count=mysql_num_rows($result);

if($count>0){
  $_SESSION['fname']=$fname;
  $_SESSION['lname']=$lname;
  $_SESSION['password']=$password;
  header("location:password.php");
} else {
  echo 'Wrong Username or Password! Return to <a href="login.php">login</a>';
  }
?>