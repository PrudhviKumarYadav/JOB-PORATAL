<?php
session_start();
$error=NULL;
if(isset($_POST['submit'])){
$link = mysqli_connect("localhost", "root", "Danger@143", "register");
$email=$mysqli->real_escape_string($_POST['email']);
$pass=$mysqli->real_escape_string($_POST['p']);
$check=$mysqli->query("SELECT * FROM REGISTRIES WHERE EMAIL='$email' LIMIT 1");
if($check->num_rows !=0){
$resultSet = $mysqli->query("SELECT * FROM REGISTRIES WHERE EMAIL='$email' AND PASSWORD='$pass' LIMIT 1");
if($resultSet->num_rows !=0){
$_SESSION["email"]=$email;
header('location:home.php');

}else{
$error="Entered password is incorrect";
}
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
    <h1>REGISTER </h1>
    <p>Please fill in this form to create an account.</p>
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
