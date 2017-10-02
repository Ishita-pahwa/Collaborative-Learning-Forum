
<?php 
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
include 't3.php' ?>
<html>
<body>
<h1><bold> Categories</h1></bold>




<form method='post' action='category.php'> 
    Category name: <input type="text" name="cat_name" >  
    
    <input type="submit" value="submit">  
 </form>

    </body>
</html>

