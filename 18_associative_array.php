<?php
echo "ASSOCIATIVE ARRAY <br>";
$favcol = array('shivam' => 'red', 
                'shubham' =>'green', 8 => 'this');

foreach ($favcol as $key => $value) {
    echo "Favourite color of $key is $value <br>";
}
// echo $favcol['shivam'];
// echo "<br>";
// echo $favcol[8];
// echo "<br>";
// echo $favcol['shubham'];



?>