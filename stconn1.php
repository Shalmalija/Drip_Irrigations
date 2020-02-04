<?php
session_start();
include('spp_sidebar.php');
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
border:2px solid steelblue;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
    color: black;
}


tbody {
  background: #f0f0f2;
  
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
h2{color:white;}

 body{
    margin: 0;
    padding: 0;
    background: url(g.png);
    background-size: cover;
    background-size: cover;
    background-position: center;
    background-attachment:fixed;
   
        font-family: sans-serif;} 
     </style>
    </head>
<body>
<center>

    <div style="overflow-x:auto;">
    <table>
    <thead><h2>STUDENT DETAILS</h2>
										
									</thead>
    			<tbody>
<?php	


          
                    
                    

                  
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);
 if (mysqli_num_rows($result) > 0  )  {
      while($row = mysqli_fetch_assoc($result)) {
	  	?>
<tr> 
   <tr>  <td>ID</td><td><?php echo $row["s_id"];?></td>
   <td>Name</td><td><?php echo $row["name"];?></td>
   <td>Contact No</td><td><?php echo $row["contactno"];?></td>
   
   </tr>
<tr> <td>Email</td><td><?php echo $row["email"];?></td>	

<td>Address</td><td><?php echo $row["address"];?></td>

<td>Stay From</td><td><?php echo $row["stayfrom"];?></td>


</tr>

<?php
      }
    }
if ( mysqli_num_rows($result1) > 0  )  {
      while( $row1= mysqli_fetch_assoc($result1)) {
	  	?>
          <tr><td>Room no</td><td><?php echo $row1["roomno"];?></td>
   <td>Seater</td><td><?php echo $row1["seater"];?></td> 
   <td>Floor No</td><td><?php echo $row1["floorno"];?></td>
</tr>
<?php
      }
    }
if ( mysqli_num_rows($result2) > 0  )  {
      while( $row2= mysqli_fetch_assoc($result2)) {
	  	?>
<tr> 

<td>Staff Name</td><td><?php echo $row2["stfname"];?></td>
 <td> Staff PhoneNo</td><td><?php echo $row2["phone"];?></td>
 <?php
      }
    }
 if ( mysqli_num_rows($result3) > 0  )  {
      while( $row3= mysqli_fetch_assoc($result3)) {
	  	?>
           <td>Amount</td><td><?php echo $row3["amount"];?></td>
 	</tr>


  
    

                  
									<?php

									 }
}
    else{
    
      echo "<script>
      alert('WRONG ID');
      window.location.href='1stu_login.php';
      </script>";
}}?>
                    						
										
									</tbody></table></div>
                                  
										
					</center>				
    </body></html>
