<?php   
include 'member.php'; 
?>

<!DOCTYPE html>

<html>
<head>
	<title>Welcome</title>

</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #b5cd60;
}

li {
    float: left;
}
#bod
{
  background: #2c3338;
  color: #606468;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
  margin: 0;
}
#snm{
	 display: block;
    color: #092259;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family:sans-serif;
    font-style: italic;

}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #5bc446;
}
.active {
    background-color: #4CAF50;
}


</style>
<body id = "bod">

<ul>
	<li id="snm">Result Analyser</li>
  <li><a href="home.php">Home</a></li>
  <li><a href="markentry.php">Mark Entry</a></li>
  <li><a href="graph.php">Check Result </a></li>
  <li style="float: right;"><a href="logout.php">Log Out <i><b><?php echo  $_SESSION["faculty"]?></b></i></a></li>
</ul> 

</body>
</html>