<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create a connection
$conn = mysqli_connect($servername,$username,$password);

//Die if connection was not succesful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}



//create a database
$sql = "CREATE DATABASE dbshivam";
$result = mysqli_query($conn,$sql);

//Check for the database creation succss
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ----->".mysqli_error($conn);

}
// echo "The result is " ;
// echo var_dump($result);
// echo "<br>";


?>

