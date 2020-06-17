<?php
$con=mysqli_connect("localhost","root","apmsetup","mydb1");
if (mysqli_connect_error($con)) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
$username = $_GET['username'];
$password = $_GET['password'];
if(isset($username) && isset($password)) {
$result = mysqli_query($con,"SELECT Role FROM table1 where Username='$username'
and Password='$password' "); }
$row = mysqli_fetch_array($result);
if (!$row) {
die('You entered it incorrectly ' . mysql_error()); }
$data = $row[0];
if($data){
echo $data; }
mysqli_close($con);
?>