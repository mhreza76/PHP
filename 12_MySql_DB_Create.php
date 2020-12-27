<?php
/* 
Ways to connect a MySQL Database
1. MySQLi extension 
2. PDO 
*/

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
echo "Connection was successful <br>";

// Create DB 
$sql = "CREATE DATABASE BAIUST";
$result = mysqli_query($conn, $sql);

// check database creation 
if($result){
    echo "The DB created successfully. <br>";
}
else{
    echo "THe DB not created, because of this error: ". mysqli_error($conn);
}

?>