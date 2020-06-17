<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'mydb1');
  $Age = $_GET['Age'];
  $sql = "DELETE FROM humaninfo WHERE Age = '$Age'";
  $result = mysqli_query($conn, $sql);
  echo ("<script>location.href='./Humaninfo2.php';</script>");


?>