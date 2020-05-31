<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'opentutorials');
  // echo "<h1>single row</h1>";
  // $sql = "SELECT * FROM topic2 WHERE id = 3";
  // $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_array($result);
  // echo '<h2>'$row['title'].'</h2>';

  echo "<h1>multi row</h1>";
  $sql = "SELECT * FROM topic2";
  $result = mysqli_query($conn, $sql);

  while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
  }
?>
