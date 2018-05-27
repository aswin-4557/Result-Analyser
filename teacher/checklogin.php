<?php 
 
if(isset($_POST["submit"])){  
  
if(!empty($_POST['uname']) && !empty($_POST['password'])) {  
    $user=$_POST['uname'];  
    $pass=$_POST['password'];  
  
   $conn = mysqli_connect("localhost","root","","Result_db");
   // Check connection
   if (mysqli_connect_errno())
    {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }  
  session_start(); 
  
    $sql = "SELECT id,username,password,course FROM teachers WHERE username = '$user'";
      $result = $conn->query($sql); 
   if ($result->num_rows > 0)   
    {  
    while($row = $result->fetch_assoc()) 
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];
    $dbid = $row['id']; 
    $dbcourse = $row['course'];

    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    
    $_SESSION['sess_user']=$dbid;  
    $_SESSION["faculty"]=$dbusername; 
    $_SESSION["csid"]=$dbcourse; 
  
    /* Redirect browser */  
    header("Location: home.php");  
    }  
    } else { 

    echo "<script>
alert('invalid username or password');
window.location.href='signin.php';
</script>";
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>