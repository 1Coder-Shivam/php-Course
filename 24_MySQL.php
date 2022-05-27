<?php
echo "Connect to database <br>";
/*
Ways to connect to a MYSQL database
1. MYSQLi extension
2. PDO
*/
//Connecting to the databases
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
    echo "Connection was successful";
}


?>