<?php
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
include 't3.php';?>
<html>
<body>

<p> <center>WELCOME <b><u><?php echo $userid?></u></b>, YOU HAVE LOGGED IN SUCCESSFULLY ! </p>

<p><center> YOU CAN DO THE FOLLOWING TASKS :- </p>

<p><center> 1. VIEW VARIOUS CATEGORES - C, C++, JAVA AND MANY OTHERS <a href="create1.php"> SEE CATEGORIES LIST</a></p>
<p><center> 2.VIEW VARIOUS QUESTION RELATED TO IT.
<p></p>
<p> <a href="logout.php"> Logout </a> </p>

</body>
</html>