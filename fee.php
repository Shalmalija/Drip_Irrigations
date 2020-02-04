<?php
session_start();

include('fee_sidebar.php');
include('function.php');
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:admin_login.php");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$seater=$_POST['seater'];
$amount=$_POST['amount'];
   
    $host="localhost"; 
$password=""; 
$db_name="project"; 


$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
$query="INSERT INTO  fee (seater,amount) VALUES('$seater','$amount')";
    if(mysqli_query($conn,$query))
    {
        echo "<script>
      alert('SUCCESSFULLY ADDED');
      window.location.href='fee.php';
      </script>";
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
    height: 320px;
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
           
                <h2>Add Fee</h2>
                    <label >Seater : </label><br>
                    <input type="number" name="seater" id="seater"  required="required" min=1 max=4 ><br><br>
                    <label >Amount : </label><br>
                    <input type="number" name="amount" id="amount"   required="required"><br><br>
                    <div class="form-actions">
   <input type="submit" id="edit-submit" name="op" value="Submit" class="button">
 </div>

           
        </form>
    </center>
    </body>
</html>
