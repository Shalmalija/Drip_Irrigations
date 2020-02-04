<?php
session_start();
include('function.php');


    $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project";
   

$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
     
$floorno="2";
$sql="SELECT * FROM students where roomno LIKE '$floorno%' ";
$sql1="SELECT * FROM students ";
?>
<html>
<head><style>
 
     </style>
    </head>
<body>

<?php	


$result=mysqli_query($conn,$sql);    
$rows=mysqli_num_rows($result); 
echo"there are " .$rows."no of stugents ";
    
                    
$result=mysqli_query($conn,$sql1);    
$rows=mysqli_num_rows($result); 
echo"<br>there are " .$rows."no of stugents ";
                  

	  	?>

                    						
										
									
                                    </body>
                                    </html>
