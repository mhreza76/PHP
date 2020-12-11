<?php
function cgpa($gpa){
    $sum = 0;
    $i = 0;
    foreach ($gpa as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}

$gpa = [3.17, 3.20, 3.38, 3.22, 3.56, 3.27, 3.76, 4.00];
$cgpa = cgpa($gpa);
echo "Reza's CGPA = $cgpa";
echo "<br>";

?>