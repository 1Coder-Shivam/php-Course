<?php

$name = "Shivam Kumar Maurya";
echo $name;
echo "<br>";
//strlen prints the length of a string.
// '.' operator is use to add strings
echo "The length of my string is " .strlen($name);
echo "<br>";
// str_word_count print the number of words in a sentances.
echo str_word_count($name);
echo "<br>";

//strrev is used to reverse the string
echo strrev($name);
echo "<br>";
//strpos is used to print position of string
echo strpos($name,"Kumar");
echo "<br>";
echo str_replace("Shivam", "Arvind", $name);
echo "<br>";
echo str_repeat($name,20);
echo "<br>";
echo rtrim("<pre>   This is a good boy  </pre> ");
echo "<br>";
echo "<pre>";
echo rtrim("   Shivam kr maurya   ");
echo "<br>";
echo ltrim("   Shivam kr maurya   ");
echo "</pre>";
?>