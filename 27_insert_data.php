<?php
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
//variable to be inserted into the table
$name= "jenifer";
$place = "NY";
$age = 34;
//sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `age`, `place`) VALUES ( '$name', '$age', '$place')";
$result = mysqli_query($conn,$sql);

//add a new trip to the Trip table
if($result){
    echo "Record has been inserted successfully!<br>";
}
else{
    echo "Record was not inserted successfully because of this error ----->".mysqli_error($conn);

}
?>
