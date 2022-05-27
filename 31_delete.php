<?php
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbshivam";

//Create a connection
$conn = mysqli_connect($servername,$username,$password, $database);

//Die if connection was not succesful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "DELETE FROM `phptrip` WHERE `place` = 'NY' LIMIT 3";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff <br>"; 

if($result){
    echo "Deleted successfully";
}
else{
    $err = myaqli_error($conn);
    echo "Not deleted successfully due to this error --> $err";
}



?>