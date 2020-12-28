<?php

// Connecting to th Database 
$serverName = "localhost";
$userName = "root";
$password = "";
$database = "baiust";

// Create a connection 
$conn = mysqli_connect($serverName,$userName,$password, $database);


// Die if connection was not successful 
if(!$conn){
    die("Sorry, faild to connect:". mysqli_connect_error());
}
echo "Connection was successful <br>";

// Create a table in DB 
$sql = "CREATE TABLE student_info (s_no INT NOT NULL AUTO_INCREMENT,
s_id INT(7) NOT NULL, name CHAR(50) NOT NULL,
department CHAR(50) NOT NULL,
PRIMARY KEY (`s_no`)
)";

$result = mysqli_query($conn, $sql);
// check database creation 
if($result){
    echo "The table is created successfully. <br>";
}
else{
    echo "THe table not created, because of this error: ". mysqli_error($conn);
}

?>