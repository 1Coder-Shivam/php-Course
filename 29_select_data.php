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

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn,$sql);

//find the number of record return
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database";
echo "<br>";

//Display the rows return by the sql query
if($num>0){
    // $row = mysqli_fetch_assoc($result); //myaqli_fetch_associative return associative array 
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using while loop
    while($row = mysqli_fetch_assoc($result)){
            // echo var_dump($row);
            echo $row['S_no'] . ". Hello ". $row['name']. " Welcome!!!";
            echo "<br>";
    }
}

?>