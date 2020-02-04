<?php
session_start();

include('function.php');
include('r_sidebar.php');
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:admin_login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $roomno=$_POST['roomno'];
$seater=$_POST['seater'];
$floorno=$_POST['floorno'];
   
    $host="localhost"; 
$username="root"; 
$password="";
$db_name="project"; 


$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$query="INSERT INTO  room (roomno,seater,floorno) VALUES('$roomno','$seater','$floorno')";
    if(mysqli_query($conn,$query))
    {
      echo "<script>
      alert('SUCCESSFULLY ADDED');
      window.location.href='room.php';
      </script>";
    }else {
 echo "Error: " . $query. "<br>" . $conn->error;

}


}?>
<html>
        <head><style>
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
  input[type=number] {
  width: 80%;
  height:10px;
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
    background-attachment:fixed;
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
                <h2>Add New Room</h2>
                    <label >Room No : </label><br>
                    <input type="number" name="roomno" id="roomno"   required="required" ><br><br>
                    <label >Seater : </label><br>
                    <input type="number" name="seater" id="seater"  required="required" ><br><br>
                    <label >Floor No : </label><br>
                    <input type="number" name="floorno" id="floorno"   required="required"><br><br>
<input type="submit" class="button" value="submit">            
        </form>
           
    </center>
    </body>
</html>
