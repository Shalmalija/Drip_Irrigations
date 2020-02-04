<?php


$db = mysqli_connect("localhost", "root", "", "project");

   if(!empty($_POST['stfname'])){
$stfname=$_POST['stfname'];
}
$query = "DELETE FROM staff WHERE stfname=$stfname";
$result = mysqli_query($db, $query);
if ( !$result ) {
    trigger_error('query failed', E_USER_ERROR);
}

?>