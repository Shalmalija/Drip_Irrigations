<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  
  background-color: #333;
}

li {
  float: left;
}
   /* body{background-color: black;}*/
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
    right: -1000px;
    
  display: inline-block;
   
    
}

.dropdown-content {
  display:none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
     body{background: url(m2.jpg) fixed;
        background-position:center;
         background-repeat: no-repeat;
         background-color: black;
        border:10;}
      
        .container {
  position: relative;
  max-width: 1000px; /* Maximum width */
  margin: 0 auto; /* Center it */
}

.container .content {
  position: absolute; /* Position the background text */
 top:65px; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); 
  background: rgba(0, 0, 0, 0.5); 
  color: #f1f1f1; 
  width: 100%;
  padding: 20px; 
  
}
     
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  
  
  <div class="dropdown">
      <li><button class="dropbtn">Login</button>
 
  <div class="dropdown-content" >
    <a href="admin_login.php">Admin Login</a>
    <a href="1stu_login.php">Student Login</a>
    
          </div></li>
</div>
  
</ul>

<div class="container">
<div class="content">
<center><h1 style="margin:50px;">MITE HOSTEL MANAGEMENT SYSTEM</h1></center>
<h3>It is a complete residential campus, offering the best stay to the inmates.
 The environment is specifically designed to meet requirements of students. 
 The college has elegantly built Girls' and Boys' hostels, with ample spacious rooms with attached bathrooms on a twin sharing basis. 
 The hostels are located within the college campus.
  It also offers round the clock hot water, internet connection, washing machine on every floor, veg & non-veg food.
   add comfort to the convenience to the residents and that has been the prime consideration of the construction. 
The hostel is built to suit the students needs with double occupancy with attached bath, round the clock hot water, internet connections, laundry, veg & non veg mess, Information centre (TV / Newspaper).</h3>
    
</div>
   
</div>
</body>
</html>
