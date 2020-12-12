<?php
// index based array 
$favFruit = array('Orange, Apple, Guava, Pineapple');
echo "Favorite fruits are : ";
foreach ($favFruit as $value) {
    echo "$value ";
}
echo "<br>";


// Associative array 
$favColor = array('Reza' => "Blue", 'Ome' =>'Red', 'Daud' => 'Brown');
foreach ($favColor as $key => $value) {
    echo "$key's favorite color is $value <br>";
}
?>