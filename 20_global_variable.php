<?php
echo "SCOPE OF LOCAL & GLOBAL VARIABLES <br> ";
$a = 98; //global variable scope is outside the functions
function printValue(){
    $a = 97; //local variable scope is within the function only
    global $a; //Give the access to global variables
    $a = 100;
    echo "<br>The value of your variable is $a <br>";
}

echo $a;
printValue();

echo var_dump($GLOBALS);
?>