<?php
// write a program to allow a driver to drive only when his age is greater than 25 and less then 65
$age = 25;
if($age >= 25 and $age < 65){
    echo "this driver can drive </br>";
}
else{
    echo "this driver can't drive </br>";
}

switch($age){
    case 12:
        echo "tieenagers ";
        break;
    
    case 25:
        echo "young";
        break;

    case 70:
        echo "old";
        break;

    default:
        echo "weird age";
        break;
}

?>