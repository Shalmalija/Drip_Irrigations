<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'project');

$id = $_GET['id'];

$q = "DELETE FROM students WHERE s_id = $id ";

mysqli_query($con, $q);
    
header('location:stu_details.php');   

?>