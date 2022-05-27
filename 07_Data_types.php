<?php
$name = "shivam";
$income = 2000;
/*php datatypes
1. String 
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/
// String- sequence of charecters
$name = "Shivam";
$friends = 'Shaurya';
echo "$name is friends$friends of $friends";

//Integer - non-decimal number
$roll_no = 137;
$dob = 2001;
echo"<br>";
echo $roll_no;
echo "<br>";
echo $dob;

//Float - Decimal point number
$number = 80.12;
echo "<br>";
echo $number;

//Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo "<br>";
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

//object- Instances of classes
//Student is a class ---> Shivam can be object
$friends = array("Shaurya", "Ritik", "Shobhit");
echo "<br>";
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];

//NULL
$name = NULL;
echo "<br>";
echo var_dump($name);

?>