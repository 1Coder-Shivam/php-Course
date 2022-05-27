<?php
echo "FUNCTIONS <br>";
function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum += $value;
        
    }
    return $sum;
}
$shivam = [75,72,90,87,67];
$sumMarks = processMarks($shivam);
echo "total marks of Shivam out of 500 is $sumMarks";

?>