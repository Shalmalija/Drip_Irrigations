
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

    
 
* {
  box-sizing: border-box;
}

    .avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -30px;
    left: calc(50% - 50px);
}
    body{
    margin: 0;
    padding: 0;
    background: url(h.jpg);
    background-size: cover;
    background-position: center;
        font-family: sans-serif;}
  
/* Add styles to the form container */
.container {
   width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: inherit;
    padding: 70px 30px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}


/* Set a style for the submit button */
.btn {
  background-color: steelblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.btn:hover {
  opacity: 1;
}
.button5 {padding:0.6em 2em;
border-radius:8px;
background-color: steelblue;
color:white;
fontsize:1.1em;
border:0;
margin:1em}

</style>
</head>
<body>
 <li><center><a class="active" href="nav.php"><button class="button5">Home</button></a></center></li>

<div class="bg-img">
   
  <form action="conn.php?user=1" class="container" method="post">
    <h1>Warden Login</h1>
 <img src="avatar.png" class="avatar">
    <label for="email"><b>Warden Username</b></label>
    <input type="text" placeholder="Enter  name" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
  </form>
</div>


</body>
</html>
