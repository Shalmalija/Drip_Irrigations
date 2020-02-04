<?php
session_start();
include("adm_nav.php");
include('function.php');
include('stf_sidebar.php');
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:admin_login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="project"; // Database name

$floorno=$_POST['floorno'];
$stfname=$_POST['stfname'];
$phone=$_POST['phone'];

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$query="INSERT INTO  staff (floorno,stfname,phone) VALUES('$floorno','$stfname','$phone')";
    if(mysqli_query($conn,$query))
    {
       echo"<script>alert('Staff Succssfully added');</script>";

        echo "<a href=\"adm_home.php\">";
        echo "Login to your account";
        echo "</a>";

    }else {
 echo "Error: " . $query. "<br>" . $conn->error;

}


}?>
<html>
    <head>
            <style>
                   
.button {
  background-color: steelblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.button:hover {
  opacity: 1;
}
                input[type=text], input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
          

   
    body{
    margin: 0;
    padding: 0;
    background: url(g.png);
    background-size: cover;
    background-position: center;
        font-family: sans-serif;}         
                    
                .container {
   width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 55%;
    left: 50%;

    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: inherit;
    padding: 70px 30px;
}
                   
                </style>
    </head>
    <body>
        <center>
           
       
        <form action="" method="POST" class="container">
                <h1>Add New Staff</h1>
            

                    <label >Floor No : </label><br>
                    <input type="number" name="floorno" id="floorno"   required="required"><br><br>
                    <label >Name : </label><br>
                    <input type="text" name="stfname" id="stfname"  required="required" ><br><br>
                    <label >Phone No : </label><br>
                    <input type="text" name="phone" id="phone"   required="required"><br><br>
                    <input type="submit" id="edit-submit" name="op" value="Submit" class="button">              
        </form>
    </center>
    </body>
</html>

