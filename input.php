<?php
    $conn = mysqli_connect('localhost', 'root', 'apmsetup', 'mydb1');
    $filtered = array(
        'age' => mysqli_real_escape_string($conn, $_POST['Age']),
        'name' => mysqli_real_escape_string($conn, $_POST['Name']),
        'address' => mysqli_real_escape_string($conn, $_POST['Address']),

    );
    $sql = "
    INSERT INTO humaninfo
      (Age, name, address)
      VALUES(
          '{$filtered['age']}',
          '{$filtered['name']}',
          '{$filtered['address']}'
      )
    ";
    $result = mysqli_query($conn, $sql);
    echo ("<script>location.href = 'Humaninfo2.php';</script>")
?>