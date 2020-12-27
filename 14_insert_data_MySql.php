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

$s_id = 1105060;
$name = "Reza";
$department = "CSE";

// query 
$sql = "INSERT INTO student_info (s_id, department, name) VALUES ('$s_id', '$department', '$name')";

$result = mysqli_query($conn, $sql);

// check insertion result
if($result){
    echo "Values inserted successfully. <br>";
}
else{
    echo "Values not inserted successfully, because of this error: ". mysqli_error($conn);
}

?>