<?php
session_start();

include('adm_nav.php');
include('function.php');
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:admin_login.php");
}
$id='1';
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin: 12px 0;
 margin: 0;
    padding: 0;
    background: url(h2.jpg);
    background-size: cover;
    background-position: center;
        font-family: sans-serif;
}

.card-container {
    
  cursor: pointer;
  height: 150px;
  perspective: 600;
  position: relative;
  width: 150px;
}
.card {
  height: 100%;
  position: center;
  transform-style: preserve-3d;
  transition: all 1s ease-in-out;
  width: 100%;
  
}
.card:hover {
  transform: rotateY(180deg);
  left:70px;
}
.card .side {
  backface-visibility: hidden;
  border-radius: 6px;
  height: 100%;
  position: center;
  left:500px;
  
  width: 100%;
}
.card .back {
  background: black;
  color:red;
  line-height: 150px;
  text-align: center;
  transform: rotateY(180deg);
  left:500px;
 
}
    .avatar{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top: 70px;
    
    left: 500px;
}
   
   
</style>
</head>
<body>
<center>
<li>

<div class="card-container">
  <div class="card">
    <div class="side"><img  align="left" src="staff.jpg" class="avatar" alt="Jimmy Eat World"></div>
      <div class="side back"><a href="staff.php" >Staff</a></div>
  </div>
</div>
 <div class="card-container">
  <div class="card">
    <div class="side"><img align="right" src="room.jpg" class="avatar" alt="Jimmy Eat World"></div>
      <div class="side back"><a href="room.php" >Room</a></div>
  </div>
</div></li>
    <li>
<div class="card-container">
  <div class="card">
    <div class="side"><img align="left" src="fee.jpg" class="avatar" alt="Jimmy Eat World"></div>
      <div class="side back"><a href="fee.php" >fee</a></div>
  </div>
</div>
<div class="card-container">
  <div class="card">
    <div class="side"><img align="right" src="staff1.jpg" class="avatar" alt="Jimmy Eat World"></div>
      <div class="side back"><a href="register.php" >Student</a></div>
  </div>
</div></li>
</center>
</body>
</html>

