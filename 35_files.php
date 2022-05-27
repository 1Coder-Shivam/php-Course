<?php
$fptr = fopen("myFile.txt", "r");
// echo $fptr;
// echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file. Please enter a valid file");
}
$content = fread($fptr, filesize("myFile.txt"));
echo $content;
fclose($fptr);
?>