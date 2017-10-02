<?php session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
?>
<html>



<?php include 't3.php'; ?>
<h1> <bold> CATEGORIES </bold></h1><div id="a1"><a class="button1" href="general.php"> BACK </a>

<br>
<body>
Discuss about various computer languages. 
<br>
<?php
 
global $no;
include 'connect.php';
$sql = 'SELECT cat_name,cat_id FROM categories';

mysql_select_db('portal');
$retval = mysql_query( $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
echo"<br>"; 
$no=$row['cat_id'];

   
   
  cat_name : echo"<a href=\"topic_index.php?cat_id=$no\" >{$row['cat_name']}</a> <br> ";
    }						   
echo "Fetched data successfully\n";
mysql_close($conn);
?>


<a href="form.php?id" >ADD NEW CATEGORY</a>
</body>
<style>
.button1 {
height: 20px;
float:right;
  padding:5px ;
  background-color: red;
  border: 1px solid #666;
  color:silver;
  text-decoration:none;
  border-radius:10px;
}
a1 {
text-align:right;
  
  
}
a1:hover {
    background-color: green;
	padding:10px;
border-width:2px;
transition:padding 200ms 0ms linear;
 }


</style>
</html>


