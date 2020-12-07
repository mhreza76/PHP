<?php

$name = "Reza";
echo $name;
echo "<br>";
// string length
echo "The length of " . "the string is " . strlen($name);
echo "<br>";

// word count 
$university = "Bangladesh Army International University of Science & Technology"; 
echo str_word_count($university);
echo "<br>";

// string revarse
echo strrev($university);
echo "<br>";

// string position 
echo strpos($university, "Science");
echo "<br>";

// string replace 
echo str_replace("&", "and", "$university");
echo "<br>";

// repeat
echo str_repeat($name, 4);
echo "<br>";

// trim 
echo "<pre>";
echo ltrim("   left trim   ");
echo "<br>";
echo rtrim("   right trim   ");
echo "<br>";
echo "<pre>";

echo "<br>";
echo "<br>";


?>