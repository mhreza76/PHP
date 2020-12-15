<?php
/* 
Ways to connect a MySQL Database
1. MySQLi extension 
2. PDO 
*/

function 
// Connecting to th Database 
$serverName = "localhost";
$userName = "root";
$password = "";

// Create a connection 
$conn = mysqli_connect($serverName,$userName,$password);


// Die if connection was not successful 
if(!$conn){
    die("Sorry, faild to connect:". mysqli_connect_error());
}
echo "Connection was successful";

// Create a Database 
$sql = "CREATE DATABASE "
?>