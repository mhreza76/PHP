<?php
echo "local/global variables and scope";
echo "<br>";
$a = 999;

function printValue(){
    // local 
    $a = 76;
    echo "local a = $a";
    echo "<br>";

    // give the access to the global variable
    global $a;
    echo "global value in local a = $a";
    echo "<br>";

    // global variables value will be changed parmanently 
    $a = 1000;
}

printValue();
echo "<br>";
echo "Global variables value changed by local scope <br> a = $a";
echo "<br>";
echo "<br>";

// print all global variable 
// $GLOBALS is called super global 
// all global variables are stores in $GLOBALS 
echo var_dump($GLOBALS);
echo "<br>";
echo "<br>";

echo $GLOBALS["a"];

?>