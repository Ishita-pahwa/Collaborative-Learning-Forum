<html>
<body>
<?php 
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username']; 
include 'myconnect.php';  
        //a real user posted a real reply 
		$reply_content=$_POST['reply_content'];
		//$reply_date=NOW();
		//$reply_topic=$_POST['reply_topic'];
		//$reply_by=$_POST['reply_by'];
	$num=$_GET['quesno'];
        $sql = "INSERT INTO replies(reply_content,reply_by,reply_date,quesno)VALUES ('$reply_content', '$userid ',NOW(),$num )"; 
                        
        $result =mysql_query($sql); 
      if(!$result)
	  {
echo 'try again' . mysql_error() ;
}


else
{ echo "reply added" ;
echo" <a href='display.php?quesno=$num'> see reply </a>";
}
header("Location:display.php?quesno=$num");
mysql_close($conn);
?>


</body>
</html>
   
	   
	   
	  