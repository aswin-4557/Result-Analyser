<?php 
include 'navig.php';
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
     <link rel="stylesheet" type="text/css" href="style.css"></link>

  
</head>

<body>
  <html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">

</head>
    <div id="login">
      <h1 style="color: #b5cd60; margin-top: 50px;" >Sign in</h1>
      <form name='form-login' action="checklogin.php" method="post">
        <span class="fontawesome-user"></span>
          <input type="text" id="user" placeholder="Username" name="uname" required>
          <span class="fontawesome-lock"></span>
          <input type="password" id"pass" placeholder="Password" name="password" required>
        
        <input type="submit" value="Login" name="submit">
        
        <a href="teacher_signup.php" style="color: white;">Not a member?Sign up</a>


</form>
</div>
  
  
</body>
</html>