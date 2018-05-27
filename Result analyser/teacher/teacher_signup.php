<?php
include 'navig.php';
  ?>
<html>
    <head>
    	<title>Sign Up</title>
    	 <link rel="stylesheet" type="text/css" href="stylesup.css"></link>
    </head>
    <body>
    	
     <div id="login">
     	<h1 style="color: #b5cd60; margin-top: 50px; text-align: center;" >Sign up</h1>
     	   <form action="register.php" method="post">
        <input type="text" name="uname" required placeholder="Username"><br>
        <input type="text" name="course" required placeholder="Course code"><br>
        <input type="text" name="password" required placeholder="Password"><br>
        <input type="submit" value="Submit" name = "submit">
        <a href="signin.php" style="color: white;">Already a member?Sign in</a>
        </form>
     </div>
    </body>
</html>