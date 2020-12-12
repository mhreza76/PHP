<?php

echo "Dates: <br>";

$d = date("dS F Y, g:i A e");
echo "Todays date is $d <br>";
echo date("l jS \of F Y h:i:s A");
echo "<br>";

// print: may 25, 1997 is on a 
echo "May 25, 1997 is on a " . date("l", mktime(0,0,0,5,25,1997));
echo "<br>";


// copy right 
echo "Copyright " . date("Y") . " | All rights reserved <br>";


?>