<?php
  $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'opentutorials');
  $sql = "
    INSERT INTO topic2
      (title, description, created)
      VALUES(
          '{$_POST['title']}',
          '{$_POST['description']}',
          NOW()
      )
  ";
  $result = mysqli_query($conn, $sql);
  if ($result === false) {
    echo '문제 발생';
    error_log(mysqli_error($conn));
  }
  else {
    echo '성공했습니다. <a href="index.php">돌아가기</a>';
  }
  echo $sql;
?>
