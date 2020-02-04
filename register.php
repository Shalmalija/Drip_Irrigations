<?php
session_start();

include('function.php');
include('reg_sidebar.php');
if(isloggedin()){

} else{
   header("location:admin_login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $s_id=$_POST['s_id'];
  $name=$_POST['name'];

  $roomno=$_POST['roomno'];

$contactno=$_POST['contactno'];
$email=$_POST['email'];


$address=$_POST['address'];
$stayfrom=$_POST['stayfrom'];

function validate_mobile($contactno){
  return preg_match('/^[0-9]{10}+$/',$contactno);
}
if(!validate_mobile($contactno)){
  $message="Invalid Phone No";
  echo "<script> alert('$message');
  window.location.replace(\"register.php\");</script>";
}
   
    $host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project";


$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$query="INSERT INTO  students (s_id,name,roomno,contactno,email,address,stayfrom) VALUES('$s_id',' $name','$roomno','$contactno','$email','$address','$stayfrom')";    if(mysqli_query($conn,$query))
    {
      echo "<script>
      alert('SUCCESSFULLY REGISTERED');
      window.location.href='register.php';
      </script>";

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
 input[type=text],[type=number],[type=email],[type=date] {
  width: 80%;
  padding: 10px;
  margin: 5px 0 22px 0;
  height:10px;
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
   width: 300px;
    height: 650px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 60%;
    left: 50%;

    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: inherit;
    padding: 20px 70px;
}
                   
                </style> 
                    </head>
<body>
    <center>
   

<form method="post" action="" class="container">
            <h2 >Student Registration </h2>
<label>Usn: </label><br>

<input type="text" name="s_id" id="s_id"   required="required" ><br>      
<label>name: </label><br>
<input type="text" name="name" id="name"   required="required" ><br>
<label >Room No : </label><br>
<input type="number" name="roomno" id="roomno"   required="required" ><br>

<label >Contact No : </label><br>
<input type="text" name="contactno" id="contactno"   required="required"><br>
<label >Email : </label><br>
<input type="email" name="email" id="email"   required="required"><br>

<label >Address: </label><br>

<input type="text" name="address" id="address"   required="required"><br>
<label >StayFrom: </label><br>
<input type="date" name="stayfrom" id="stayfrom"   required="required"><br>
<input type="submit" class="button" value="submit">            

</form>
</center>
</body>
</html>