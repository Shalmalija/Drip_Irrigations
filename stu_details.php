<?php

session_start();

include('function.php');
include('stf_sidebar.php');
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:admin_login.php");
}
$dbuser="root";
$dbpass="";
$host="localhost";
$db="project";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from rooms where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}

?><html>
<head><style>
  table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;

}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
    color: black;
}
thead {
  background: #395870;
  background: linear-gradient(#49708f, #293f50);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}

tbody {
  background: #f0f0f2;
  
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
    h2{color: #cecfd5;}
     body{
    margin: 0;
    padding: 0;
    background: url(g.png);
    background-size: cover;
    background-position: center;
    background-attachment:fixed;
        font-family: sans-serif;}    
     </style>
    </head>
<body><center>
    <div style="overflow-x:auto;">
    <table>
    <thead><h2>STUDENT DETAILS</h2>
										<tr><th>Serial No.</th>
											<th>Id</th>
											<th>Name</th>
                                            <th>Room No</th>
                                             
                                             <th>Contact No</th>
                                             <th>Email</th>
                                             
                                             <th>Address</th>
                                             <th>Stay From</th>
                                              
										</tr>
									</thead>
    			<tbody>
<?php	

$ret="select * from students";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
          
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->s_id;?></td>
<td><?php echo $row->name;?></td>
<td><?php echo $row->roomno;?></td>

<td><?php echo $row->contactno;?></td>
<td><?php echo $row->email;?></td>	

<td><?php echo $row->address;?></td>
<td><?php echo $row->stayfrom;?></td>
  
           

                    </tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody></table></div></center>
    </body></html>