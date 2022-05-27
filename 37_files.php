<?php
echo "Write files";
//writing to a file in php
// $fptr = fopen("myFile2.txt", "w");
// fwrite($fptr, "Hello My name is Shivam Kumar Maurya.\n");
// fwrite($fptr, "Hello again My name is Shivam Kumar Maurya.\n");
// fwrite($fptr, "Hello again My name is Shivam Kumar Maurya.\n");
// fclose($fptr);

//Appending to a file in php
$fptr = fopen("myFile2.txt", "a");
fwrite($fptr, "Btech Cse");
?>