<?php
// operator in PHP
/* 
1. Airthmetic operator
2.Assignment operator
3. comparison operator
4. Logical operator
*/
//Airthematic opreator
$a = 33;
$b = 77;
echo "For a+b, the result is  ". ($a + $b). "<br>";
echo "For a-b, the result is ". ($a - $b). "<br>";
echo "For a*b, the result is ". ($a * $b). "<br>";
echo "For a/b, the result is ". ($a / $b). "<br>";
echo "For a%b, the result is ". ($a % $b). "<br>";
echo "For a**b, the result is ". ($a ** $b). "<br>";

//Assignment opreator
$a +=6;
echo " for a , the value is ". $a.  "<br>";
$a *=6;
echo " for a , the value is ". $a.  "<br>";
$a -=6;
echo " for a , the value is ". $a.  "<br>";
$a /=6;
echo " for a , the value is ". $a.  "<br>";

//Comparison operator
$x = 777;
$y = 78;
echo " for x== y, the result is  ";
echo var_dump($x==$y);
echo "<br>";
// <> is not equalto operator

//logical operator
$m = true;
$n = false;
echo " for m and n, the result is  ";
echo var_dump($m and $n);
echo "<br>";
echo " for m && n, the result is  ";
echo var_dump($m && $n);
echo "<br>";
echo " for m or n, the result is  ";
echo var_dump($m or $n);
echo "<br>";
echo " for m || n, the result is  ";
echo var_dump($m || $n);
echo "<br>";
echo " for !m, the result is  ";
echo var_dump(!$m);
echo "<br>";


?>