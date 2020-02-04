<?php
session_start();
include('function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project";
   

$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
     
$s_id=$_POST['s_id'];  
$p=$_POST['pwd'];
if($p=='123qwe'){
$sql="SELECT * FROM students WHERE s_id='$s_id'";
$sql1="SELECT * FROM room WHERE roomno in(SELECT roomno FROM students WHERE s_id='$s_id')";
$sql2="SELECT * FROM staff WHERE floorno in(SELECT floorno FROM room WHERE roomno in(SELECT roomno FROM students WHERE s_id='$s_id'))";
$sql3="SELECT * FROM fee WHERE seater in(SELECT seater FROM room WHERE roomno in(SELECT roomno FROM students WHERE s_id='$s_id'))";
}
else{
  echo "<script> alert('wrong pawssword');
  window.location.replace(\"1stu_login.php\");</script>";
}
?>

<html>
<head><style>
  table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
    color: black;
}
thead {
  background: #395870;
  background: linear-gradient(#49708f, #293f50);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}

tbody {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
    h2{color: #cecfd5;}
     body{
    margin: 0;
    padding: 0;
    background: url(g.png);
    background-size: cover;
    background-position: center;
        font-family: sans-serif;} 
        .floatLeft { width: 50%; float: left; }
.floatRight {width: 100%; margin-right:50px; }  
.floatLeft1 {width: 100%; margin-right:-20px;  } 
.floatRight1 {width: 100%; margin-right:-20px;  } 
     </style>
    </head>
<body><center>
<div class="floatLeft">
    <div style="overflow-x:auto;">
    <table>
    <thead><h2>STUDENT DETAILS</h2>
										
									</thead>
    			<tbody>
<?php	


          
                    
                    

                  
$result=mysqli_query($conn,$sql);
 if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
	  	?>
<tr> 
   <tr>  <td>ID</td><td><?php echo $row["s_id"];?></td></tr>
<tr> <td>Name</td><td><?php echo $row["name"];?></td></tr>
<tr> <td>Roomno</td><td><?php echo $row["roomno"];?></td></tr>

<tr> <td>Contact No</td><td><?php echo $row["contactno"];?></td></tr>
<tr> <td>Email</td><td><?php echo $row["email"];?></td>	</tr>

<tr> <td>Address</td><td><?php echo $row["address"];?></td></tr>
<tr> <td>Stayfrom</td><td><?php echo $row["stayfrom"];?></td></tr>
  
<tr> <td>Email</td><td><?php echo $row["email"];?></td>	</tr>

<tr> <td>Address</td><td><?php echo $row["address"];?></td></tr>
<tr> <td>Stayfrom</td><td><?php echo $row["stayfrom"];?></td></tr>    

                  
									<?php

									 }
}
    else{
    
      echo "<script>
      alert('WRONG ID');
      window.location.href='1stu_login.php';
      </script>";
}}?>
                    						
										
									</tbody></table></div></div>
<div class="floatRight">
                  <div style="overflow-x:auto;">
    <table class="room">
    <thead ><h2>ROOM DETAILS</h2>
										
									</thead>
    			<tbody>
<?php	


          
                    
                    

                  
$result1=mysqli_query($conn,$sql1);
 if (mysqli_num_rows($result1) > 0) {
      while($row = mysqli_fetch_assoc($result1)) {
	  	?>
<tr> 
   <tr>  <td>Room no</td><td><?php echo $row["roomno"];?></td></tr>
<tr> <td>Seater</td><td><?php echo $row["seater"];?></td></tr>
<tr> <td>Floor no</td><td><?php echo $row["floorno"];?></td></tr>


                  
									<?php

									 }
}
 ?>
                    						
										
									</tbody></table></div></div>
                  <div class="floatLeft1">
    <div style="overflow-x:auto;">
    <table>
    <thead><h2>STAFF DETAILS</h2>
										
									</thead>
    			<tbody>
<?php	
$result2=mysqli_query($conn,$sql2);
 if (mysqli_num_rows($result2) > 0) {
      while($row = mysqli_fetch_assoc($result2)) {
	  	?>
<tr> 
   <tr>  <td>Floor no</td><td><?php echo $row["floorno"];?></td></tr>
<tr> <td>Staff Name</td><td><?php echo $row["stfname"];?></td></tr>
<tr> <td>Phone no</td><td><?php echo $row["phone"];?></td></tr>

   
<?php
}
}
?>
</tbody></table></div></div>
<div class="floatRight1">
                  <div style="overflow-x:auto;">
    <table class="room">
    <thead ><h2>FEE DETAILS</h2>
										
									</thead>
    			<tbody>
<?php	
$result3=mysqli_query($conn,$sql3);
 if (mysqli_num_rows($result3) > 0) {
      while($row = mysqli_fetch_assoc($result3)) {
	  	?>
<tr> 
<tr> <td>Seater</td><td><?php echo $row["seater"];?></td></tr>
<tr> <td>Amount </td><td><?php echo $row["amount"];?></td></tr>
<?php
}
}
?>
                    						
										
									</tbody></table></div></div></center>
    </body></html>
