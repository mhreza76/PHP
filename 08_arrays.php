<?php
// index based array 
echo "Index based array <br>";
$favFruit = array('Orange, Apple, Guava, Pineapple');
echo "Favorite fruits are : ";
foreach ($favFruit as $value) {
    echo "$value ";
}
echo "<br>";
echo "<br>";

// Associative array 
echo "Associative array <br>";
$favColor = array('Reza' => "Blue", 'Ome' =>'Red',
                     'Daud' => 'Brown');

foreach ($favColor as $key => $value) {
    echo "$key's favorite color is $value <br>";
}
echo "<br>";


// MultiDimensioinal Array 
echo "MultiDimensioinal array <br>";

// 2 dimensionall array 
$multiDim = array(  array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1));

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

$threeDimArray = array(array(
                        array("reza", "daud", "ome"),
                        array("shuvam", "himel", "izaz"),
                        array("sayanta", "hasib", "toaha")
));

for ($i=0; $i < count($threeDimArray); $i++) { 
    for ($j=0; $j < count($threeDimArray[$i]); $j++) { 
        for ($k=0; $k < count($threeDimArray[$i][$j]); $k++) { 
            echo $threeDimArray[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
}

 
?>