<html>
    <head><style>
ul {
  list-style-type: none;

  background-color: #333;
}

li {
  float: left;
}
   
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
</style>
        </head>

<body>
<ul>
  <li><a class="active" href="adm_home.php">Home</a></li>
  
  
  <div class="dropdown">
      <li><a class="dropbtn" a href="nav.php">Logout</a>

    
          </li>
</div>
  
</ul></body>
    </html>