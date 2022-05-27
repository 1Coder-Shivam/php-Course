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

//create a table in the db
$sql = "CREATE TABLE `phptrip` ( `S_no` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(15) NOT NULL ,
         `age` INT(3) NOT NULL ,`place` VARCHAR(15) NOT NULL , PRIMARY KEY (`S_no`))";

$result = mysqli_query($conn,$sql);

//Check for the table creation succss
if($result){
    echo "The db was created successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ----->".mysqli_error($conn);

}
?>