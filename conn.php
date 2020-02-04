<?php


session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="project";
 $userlevel=$_GET['user'];   
    

$uname=$_POST['username']; 
$pword=$_POST['password']; 






$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
    
$sql="SELECT * FROM admin WHERE username='$uname' AND password='$pword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $uname;
	$_SESSION['id']=$id;
    if($userlevel=='1'){
     header("location:adm_home.php");
}
}
else{
 //echo"<script>alert('wrong password');</script>";
    // header("location:adm_home.php");
  //<a href="admin_login.php">Back to Admin login</a>;

echo "<script>
alert('wrong password');
window.location.href='admin_login.php';
</script>";
        

}
}


?>