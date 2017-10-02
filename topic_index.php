<html>
<body>
<?php
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
include 't3.php'; 
include 'connect.php';
mysql_select_db('topic');

/*$sql='SELECT  
    topic_ques.quesname  
FROM  
    topic_ques  
LEFT JOIN  
    categories 
ON  
    topic_ques.cat_id = categories.cat_id  
WHERE  
 topic_ques.quesname = " . mysql_real_escape_string($_GET['cat_id'])"'  
      */
$no = $_GET['cat_id'];
//echo "Category ID: $no";
	  $sql = "SELECT quesname , quesno FROM topic_ques WHERE cat_id = $no";
	 
/*"INSERT INTO topic_ques.cat_id
select cat_id
FROM categories";*/
//global $num=$no;
$retval = mysql_query( $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{

echo"<br>"; 
$num=$row['quesno'];

   
   echo"<br>";
   echo"<a href=\"display.php?quesno=$num\" >{$row['quesname']}</a> <br> ".
    
        
         "--------------------------------<br>";
} 
//echo "Fetched data successfully\n";
echo "add new question";



echo"<br>";
echo "<a href=\"newtopic.php?cat_id=$no\" >>click to add</a>";
mysql_close($conn);
?>
</body>
</html>