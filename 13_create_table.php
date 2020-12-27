<?php

// Connecting to the Database 
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "BAIUST";

// Create a connection to the DataBase
$conn = mysqli_connect($serverName,$userName,$password, $database);


// Die if connection was not successful 
if(!$conn){
    die("Sorry, faild to connect:". mysqli_connect_error());
}
echo "Connection was successful";
?>