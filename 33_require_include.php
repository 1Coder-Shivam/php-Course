<?php
// include '_dbconnect1.php';
require '_dbconnect.php';

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

//find the number of record return
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database";
echo "<br>";
while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['S_no'] . ". Hello ". $row['name']. " Welcome!!!";
    echo "<br>";
}


?>