<?php
echo "multi-dim";

echo "<br>";
 // one dimension array
//$favCol = array('juha' => 'red','archa' => 'blue','maruf' => 'black');
//foreach ($favCol as $key => $value) {
    //echo "<br> Fav color of $key is $value";

// creating a 2 dimension array
$multiDim = array(array(1,2,3,4),
                 array(5,6,7,8),
                 array(9,10,11,12));
                 
//echo var_dump($multiDim);

echo $multiDim[0][2];



    



?>