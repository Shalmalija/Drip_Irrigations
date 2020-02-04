<?php

session_start();
include('adm_nav.php');
include('stf_sidebar.php');
$dbuser="root";
$dbpass="";
$host="localhost";
$db="project";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
      
    
    
?>
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
           
           

       
        <form action="stf-delete2.php" method="post" class="container">
                <h1>Delete Staff</h1>
                   
                    <label >Name : </label><br>
                    <input type="text" name="stfname" id="stfname"  required="required" ><br><br>
                    <input type="submit" id="submit" name="submit" value="delete" class="button">  
            
              

        </form>
       
    </center>
    </body>
</html>