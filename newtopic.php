<html>
<head>
<?php 
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
include 't3.php';?>
<h2>
Create a topic
</h2>
</head>
<body>
<br>
<?php 
 include 'connect.php';
mysql_select_db('topic');
$no = $_GET['cat_id'];
//echo" $no";
//'SELECT cat_id FROM categories WHERE cat_id=$no';

?>

 <form method='post' action="insert.php?cat_id=<?php echo $no?>">  

<br>

Question:<textarea name='ques' ></textarea>
<br>
<input type="submit" value="Add question" >
</form>

</body>
</html> 