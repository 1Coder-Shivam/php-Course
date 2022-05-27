<?php
echo "For Each Loop <br>";
$arr = array("mon", "tue", "wed", "thu", "fri", "sat", "sun");
for ($i=0; $i <count($arr) ; $i++) { 
    echo $arr[$i];
    echo "<br>";
        
}
foreach($arr as $value){
    echo "$value<br>";

}

?>