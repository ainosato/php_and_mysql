<?php
  $conn = mysqli_connect("localhost", "root", "apmsetup", "opentutorials");
  $sql = "
      INSERT INTO topic2 (
          title,
          description,
          created
      ) VALUES (
          'MySQL',
          'MySQL is ....',
          NOW()
      )";
  $result = mysqli_query($conn, $sql);
  if (! $result) {
    echo mysqli_error($conn);
  }

?>
