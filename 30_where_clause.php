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

$sql = "SELECT * FROM `phptrip` WHERE `place`='USA'";
$result = mysqli_query($conn,$sql);

//find the number of record return
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database";
echo "<br>";
$no = 1;
//usage of WHERE clause to fetch data from the database
if($num>0){
    while($row = mysqli_fetch_assoc($result)){
            
            echo $no . ". Hello ". $row['name']. " Welcome!!!";
            echo "<br>";
            $no = $no +1;
    }
}

//Usage of where clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'Victoria June' WHERE `place` = 'USA'";
$result = mysqli_query($conn,$sql);
echo var_dump($result);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff";

if($result){
    echo "<br>we updated the record successfully";
}
else{
    echo "<br>we could not update the record successfully";
}
?>