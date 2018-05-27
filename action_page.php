<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Result_db";


$coursera = [];
$coursera1 = [];
$combined = [];
$usrnm=$_POST['uname'];
$flag=0;

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
$sql2 = "SELECT * FROM mytable WHERE RegisterNumber = '$usrnm'; ";
$result2= $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
$row2 = $result2->fetch_assoc();
$flag=1;
}
else
for($i=0;$i<sizeof($coursera);$i++)
	$combined[$coursera[$i]] = $coursera1[$i];




$conn->close();
if($flag==1){
    echo '<table style="border-spacing: 50px;">';
 echo' <tr>
    <th style="text-align: left;">Course</th>
    <th>Grade</th>
   
  </tr>';
  for($i=0;$i<sizeof($coursera);$i++){
    $abc=$coursera1[$i];

  echo'<tr><td>';
    echo $coursera1[$i];
    echo'</td><td>';
    echo $row2[$coursera[$i]];
    echo'</td>


  </tr>';}
}
else
echo 'ERROR 404 SORRY NO RESULTS FOUND!!!';
?>
     
     
