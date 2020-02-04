<?php
session_start();

include('adm_nav.php');
include('function.php');
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project"; 
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
?>
<!doctype html>
<html lang="en" class="no-js">

<head>


<style>
body{
	background:black;
	background-size: cover;
    background-position: center;
}
h1{
	color:white;
	text-align:center;
}
.row{
display:flex;
}
.first{
	flex:33.33%;
	padding:5px;
}

</style>
</head>
    <body>
<div class="row">
  <div class="first">  
      <h1 >STAFF</h1>h1>
   <a href="staff.php" >  <img  src="staff.jpg"  style="width:250px;height:250px;"></a></div>
    <div class="first"> <h1  >FEE</h1>
   <a href="fee.php" >  <img src="fee.jpg"  style="width:250px;height:250px;"></a></div>
  <div class="first">
      <h1 >ROOM</h1>
   <a href="room.php" >  <img  src="room.jpg"  style="width:250px;height:250px;"></a></div>
  <div class="first">
      <h1 >STUDENT</h1>
   <a href="register.php" >  <img  src="stu.jpg"  style="width:250px;height:250px;"></a></div>

   
   </div>	
</body>

</html>