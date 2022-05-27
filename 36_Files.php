<?php
$fptr = fopen("myFile.txt", "r");

// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo var_dump(fgets($fptr));
//reading of file line by line using loop.
/*while($a = fgets($fptr)){
    
    echo $a;
    echo "<br>";
}
echo "End of the file read."*/
//Reading file charecter by charecter
// echo fgetc($fptr);
// while($a = fgetc($fptr)){
    
//     echo $a;
// }
// echo "End of the file read.";

//WAP which read the content of a file untill '.' has been encountered
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);

?>