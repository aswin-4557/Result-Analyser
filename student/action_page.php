<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Result_db";


$coursera = [];
$coursera1 = [];
$combined = [];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Course_Code FROM courses;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	  array_push($coursera,$row['Course_Code']);
        
    }
}
$sql1 = "SELECT Course FROM courses;";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
    	  array_push($coursera1,$row1['Course']);
        
    }
}
print_r($coursera);
print_r($coursera1);
fo




$conn->close();
?>