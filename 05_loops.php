<?php

// while loop 
$i = 0;
while ($i < 10) {
    echo $i+1;
    echo "<br>";
    $i++;
}
echo "<br>";
echo "<br>";


// do while loop 
$i = 1;
do {
    echo $i;
    echo " ";
    $i++;
} while ($i <= 5);
echo "<br>";


// for loop 
$a = 10;
for ($i=1; $i <= $a; $i++) {
    echo " ";
    echo $i;

}
echo "<br>";

$flowers = array("water lily, lily, sunflower, rose");
for ($i=0; $i < count($flowers); $i++) { 
    echo $flowers[$i];
    echo " ";
}
echo "<br>";


// foreach loop 
foreach ($flowers as $value) {
    echo "$value <br>";
}


?>