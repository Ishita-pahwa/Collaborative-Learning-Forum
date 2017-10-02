<?php
session_start();
if(!isset($_SESSION['username']))
	
{
	header("Location: welcome.php");
	exit;
	}
$userid = $_SESSION['username'];
session_destroy();



?>
<html>
<body>

<p> Dear <b><u><?php echo $userid?></u></b>you have logged out successfully ! </p>

<p> <a href="mainheader.php"> Login Again </a> </p>

</body>
</html>