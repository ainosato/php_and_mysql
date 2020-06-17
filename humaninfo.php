<?php
$servername = "localhost";
$username = "root";
$dbname = "dbname";
$con=mysqli_connect("localhost","root","apmsetup","mydb1");
if (!$con) {
echo "Failed to connect to MySQL: " . mysqli_connect_error(); exit(); }
mysqli_set_charset($con,"utf8");
$sql = "select * from humaninfo";
$result = mysqli_query($con, $sql);
$data = array();
if($result) {
    while($row = mysqli_fetch_array($result)) {
        array_push($data, array('Age'=>$row[0], 'name'=>$row[1], 'address'=>$row[2] ));  }
        $json = json_encode(array($data));
        echo $json;  }
        
    
    else {
        echo "SQLerror : "; echo mysqli_error($con);
    }
    

?>