<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
  <p>Data UpDate</p>
    <form action="in.php" method="POST">
        Name:
        <input type="text" name="name">
        <input type="submit" value="쿼리 전송">
    </form>
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
  
  </body>
</html>
