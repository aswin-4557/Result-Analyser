<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Result_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$course= mysqli_real_escape_string($conn, $_POST['course']);
$pass= mysqli_real_escape_string($conn, $_POST['password']);

$sql = "INSERT INTO teachers values('','$uname','$course','$pass')";


if ($conn->query($sql) === TRUE) {
    echo "<script>
alert('Successfully Registered!!!');
window.location.href='signin.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
else
echo "error";


?>