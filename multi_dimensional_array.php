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
                 array(9,0,1,2));
                 
//echo var_dump($multiDim);

//echo $multiDim[0][2];
 
// PRINTING THE CONTENTS OF A 2 DIMENSIONAL ARRAY
for ($i=0; $i < count($multiDim) ; $i++) { 
    echo var_dump($multiDim[$i]);
    echo "<br>";
}

for ($i=0; $i < count($multiDim) ; $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 

        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}



    



?>