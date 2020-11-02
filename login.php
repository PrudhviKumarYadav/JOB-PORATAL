<?php
session_start();
if(isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root", "Danger@143", "register");
$email=$mysqli->real_escape_string($link,$_POST['email']);
$pass=$mysqli->real_escape_string($link,$_POST['p']);
$check="SELECT * FROM REGISTRIES WHERE EMAIL='$email' AND  PASSWORD='$p' ";
$result = mysqli_query($link,$check);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];
$count = mysqli_num_rows($result);
if($count == 1) {
  header("location: main.php");
}else {
  $error = "Your Login Name or Password is invalid";
}
}
?>
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

.bg-img {
  background-image: url("bg.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height:100%;
}

.container {
  position: absolute;
  left: 500px;
  margin: 20px;
  border-radius: 25px;
  border-style: solid;
  border-color:black ;
  max-width: 450px;
  padding: 16px;
 background-color: white;
}

input[type=email], input[type=password] {
  width: 100%;
  padding: 13px;
  margin: 5px 0 22px 0;
  border: 1px;
  border-style:solid;
  border-color:green;
  background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus{
  background-color: #ddd;
  outline: none;
}
.btn {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  margin: 10px;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 10;
}
</style>
</head>
<body>

<div class="bg-img">
  <form action="" method="post" class="container">
    <h1>LOGIN </h1>
    <hr>
    <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter valid email"  required>
    <input type="password" name="p" placeholder="Password"required>
    <button type="submit" class="btn" name="submit" >Login</button>
    <center><br><br> not a member?  <a href="reg.php">Register</a></center>
    <center><p style="color:red"> <?php if(isset($_POST['submit']))
    { echo $error; } ?></p></center>
</form>
</div><center>
</body>
</html>
