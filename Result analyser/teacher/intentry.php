<?php
include 'member.php'; 
include 'connection.php'; 
$rollnumber=mysqli_real_escape_string($con, $_REQUEST['rollno']);
$mark= mysqli_real_escape_string($con, $_REQUEST['mark']);
if($rollnumber<10)
	$id="TCR15CS00".$rollnumber;
else
	$id="TCR15CS0".$rollnumber;


$sql = "INSERT INTO Internal_marks values('$id','$mark')";


if ($con->query($sql) === TRUE) {
	echo'<script>window.confirm("Marks entered sucessfully");</script>';
   echo "<script>window.location.href='markentry.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$con->close();
echo "connected";

 ?>