<?php
if(isset($_POST['submit'])){
$email=$_POST['email']
$p1=$_POST['p1'];
$p2=$_POST['p2'];
if($p1!=$p2){
    echo"the password you entered do not match to the password";
}else{
if (!empty($email) || !empty($p2)) {
$link = mysqli_connect("localhost", "root", "Danger@143", "register");
if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT EMAIL from REGISTRIES WHERE email = ? Limit 1";
     $INSERT = "INSERT Into register(email, password) values(?, ?)";
     $s = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
     $stmt->close();
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ss", $email, $password);
     $stmt->execute();
     header('Location: login.php');
      exit();
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
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
    <p>Please fill this form to create an account.</p>
    <hr>
    <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="please enter valid email"  required>
    <input type="password" name="p1" placeholder="Password"
    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <input type="password" name="p2" placeholder="Reenter Password" required><br><br>
    <button type="submit" class="btn" name="submit" >Register</button>
    <center><br><br> Already member?  <a href="login.php">Login here</a></center>
    <center><p style="color:red"> <?php if(isset($_POST['submit']))
    { echo $error; } ?></p></center>
</form>
</div><center>
</body>
</html>
