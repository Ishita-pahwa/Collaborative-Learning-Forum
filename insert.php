
 <?php
include 'connect.php';
mysql_select_db('portal');

$no = $_GET['cat_id'];

 $sql="INSERT INTO topic_ques(quesname,cat_id)
 VALUES
 ('$_POST[ques]',$no)";
   
// $r=$_POST[ques];
//connection to the database
//$conn = mysql_connect($hostname, $username, $password) or 
//            die("Unable to connect to MySQL");

//select a database to work with
//$selected = mysql_select_db($database2) or 
  //          die("no database");
//echo 'connection successful!';
 //$row=(int)mysql_query('SELECT id FROM uss');
//$s="INSERT INTO topic_ques(cat_id)VALUES('$_POST[$row]')";         


 
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "your question has been added";



//header('Location: topic_index.php?cat_id=$no');

echo "<br>";
echo "<a href=\"topic_index.php?cat_id=$no\">click here to continue</a>";
header("Location:topic_index.php?cat_id=$no");
mysql_close($conn);
?>
</body>
</html>
 