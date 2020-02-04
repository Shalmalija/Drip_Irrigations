<?php
  
session_start();
//$con = mysqli_connect('localhost:3307','root');
//
//mysqli_select_db($con, 'db_hostel');
//
//    $q = " select * from student";
//        
//    $query = mysqli_query($con,$q);    
//    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display</title>
</head>
<meta charset="utf-8">
 
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/button.css">
<body>
    <div style="" class="container ">
    <div class="col-lg-12 ">
        <h1 class="text-danger text-center">Student list </h1>
        <table   class="table table-striped table-hover table-bordered ">
       <br >
        <tr class="bg-dark text-white text-center">
            <th>Hostel block</th>
            <th>Room no</th>
            <th>Student name</th>
            <th>DOB</th>
            <th>address</th>
            <th>department</th>
            <th>father's name</th>
            <th>phone number</th>
            <th>Delete</th>
            <th>Update</th>
          
        </tr>
        
        <?php
        $con = mysqli_connect('localhost:3307','root');

mysqli_select_db($con, 'db_hostel');

               $a = $_SESSION['username'];
        $q = "CALL `studentlist`('$a');";
        
        $query = mysqli_query($con,$q);    
        
        while($res = mysqli_fetch_array($query)){

        
        ?>
        
        
         <tr class="text-center">
            <th><?php echo $res['hostel_id']?></th>
            <th><?php echo $res['room_no']?></th>
            <th><?php echo $res['student_name'] ?></th>
            <th><?php echo $res['dob']?></th>
            <th><?php echo $res['address'] ?></th>
            <th><?php echo $res['department']?></th>
            <th><?php echo $res['fathers_name']?></th>

            <th><?php echo $res['phono']?></th>
            
            
             <th><button class="btn btn-danger"> <a class="text-white "href="student-delete.php?id=<?php echo $res['student_id']; ?>">Delete</a></button></th>
            <th><button class="btn btn-success"> <a class="text-white "href="student-update.php?id=<?php echo $res['student_id']; ?>">Update</a></button></th>
            
        </tr>
        <?php
            
        }
            
        ?>    
    </table>    
        
        <a class="text-white" href="main-page.php"><button  class="btn  btn-primary">Back to home</button></a>
    </div>    
        
    </div>
    
</body>
</html>