<?php
if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","Danger@143","job");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$skill1=$mysqli->real_escape_string($_POST['skills[0]']);
$skill2=$mysqli->real_escape_string($_POST['skills[1]']);
$skill3=$mysqli->real_escape_string($_POST['skills[2]']);
$skill4=$mysqli->real_escape_string($_POST['skills[3]']);
$skill5=$mysqli->real_escape_string($_POST['skills[4]']);
$skill6=$mysqli->real_escape_string($_POST['skills[5]']);
$skill7=$mysqli->real_escape_string($_POST['skills[6]']);
$skill8=$mysqli->real_escape_string($_POST['skills[7]']);
$skill9=$mysqli->real_escape_string($_POST['skills[8]']);
$skill10=$mysqli->real_escape_string($_POST['skills[9]']);
$result=$mysqli_query($con,"SELECT *from JOBS WHERE ((SKILL1='$skill1' OR SKILL1='$skill2' OR SKILL1 ='$skill3' OR SKILL1 ='$skill4' OR SKILL1 ='$skill5' OR SKILL1 ='$skill6' OR SKILL1 ='$skill7' OR SKILL1 ='$skill8' OR SKILL1 ='$skill9' OR SKILL1 ='$skill10')AND(SKILL2='$skill1' OR SKILL2='$skill2' OR SKILL2 ='$skill3' OR SKILL2 ='$skill4' OR SKILL2 ='$skill5' OR SKILL2 ='$skill6' OR SKILL2 ='$skill7' OR SKILL2 ='$skill8' OR SKILL2 ='$skill9' OR SKILL2 ='$skill10'))" );
echo "<table border='1'><tr><th>JOB_NAME</th><th>COMPANY_NAME</th><th>COMPANY_NO</th><th>COMPANY_MAIL</th><th>LOCATION</th><th>SALARY</th></tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['JOB_NAME'] . "</td>";
echo "<td>" . $row['COMPANY_NAME'] . "</td>";
echo "<td>" . $row['COMPANY_No'] . "</td>";
echo "<td>" . $row['COMPANY_MAIL'] . "</td>";
echo "<td>" . $row['LOCATION'] . "</td>";
echo "<td>" . $row['SALARY'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
}
?>
