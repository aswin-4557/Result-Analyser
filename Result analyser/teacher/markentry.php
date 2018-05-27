<?php include 'navbar.php';; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mark Entry</title>
</head>
<style type="text/css">
form{
	color: white;
	
	text-align: center;
}	
input
{
	margin: 2px;
	 border-radius: 4px;
	 width: 500px;
	 height: 30px;
	 padding-left:5px;
}

</style>

<body style="background: #2c3338;
  color: #606468;">

<form action=intentry.php>
<input type="text" name = "rollno" value = "" style="border: 2px grey; margin-top: 180px;" placeholder="Roll No" ><br/>
<Input type = "text" name = "mark" value = "" style="border: 2px grey;" placeholder="Internal Mark"><br/>
<input type="submit" name="submit" value="SAVE" style=" color: green;background-color: #4CAF50; align-items: center;"></br>

</form>



</body>
</html>