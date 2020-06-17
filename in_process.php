<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'db');
  $name = $_POST['name'];
  $sql = "
    UPDATE person 
    SET name = '$name'
    WHERE address = 'Seoul';     
  ";
  mysqli_query($conn, $sql);
?>