<html>
<body>
<?php

session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];include 't3.php';
include 'connect.php';
mysql_select_db('portal');
$tbl_name = "replies";

$num = $_GET['quesno'];
//echo "Category ID: $no";
	 
	 
$sql = "SELECT reply_by,reply_content, reply_date,likes,unlikes,id FROM replies WHERE quesno=$num" ;


$retval = mysql_query( $sql );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

		 //$result = mysql_query("SELECT * FROM $tbl_name ORDER BY id ");
		 
	//$row = mysql_fetch_array($retval);
	//$res = mysql_fetch_array($result);
while($row = mysql_fetch_array($retval)){
echo"<br>";

echo "NAME :{$row['reply_by']}  <br> ".
        " CONTENT :<br> <textarea class='content'>{$row['reply_content']} </textarea> <br>".
		"DATE :{$row['reply_date']}  <br> ".
		 "<table id='replies'>";
		
		 //while($row = mysql_fetch_array($result)) {
		 
	//$num = $_GET['quesno'];
     echo"<tr>";
	//echo "<td id='id'><form method= 'post'>". $row['id'] . "</td>";
    echo "<td id='likes'>" . "<form action='like.php?quesno=$num' method ='post'>" . "<input type='hidden' name='$row[id]' value='$row[likes]' />" . "</form>" . "</td>";              
    echo "<td id='likes'><form action='like.php?quesno=$num' method ='post'><input type='hidden' name='id' value='" . (int)$row['id'] . "' /><input type='submit' class='submit' name='submit' value='" . (int)$row['likes'] . " LIKES' /></form></td>";
	
	echo "<td id='unlikes'>" . "<form action='unlike.php?quesno=$num' method ='post'>" . "<input type='hidden' name='$row[id]' value='$row[likes]' />" . "</form>" . "</td>";              
    echo "<td id='unlikes'><form action='unlike.php?quesno=$num' method ='post'><input type='hidden' name='id' value='" . (int)$row['id'] . "' /><input type='submit' class='submit1' name='submit' value='" . (int)$row['unlikes'] . " DISLIKES' /></form></td>";
	echo "</tr>"; 
echo "</table>";
	}	 
		"--------------------------------<br>";


   // echo "reply_by :{$row['reply_by']}  <br> ".
     //   "reply_content : {$row['reply_content']} <br> ".
		// "reply_date :{$row['reply_date']}  <br> ".
		 
	
	//"--------------------------------<br>";
		

echo "<a href=\"form for reply.php?quesno=$num\"> POST YOUR ANSWER</a>";
mysql_close($conn);
?>

<style>
.submit
{
height: 30px;
font-weight:bold;
 color: black;
 background-color: #57d6c7;
 }  
 
.submit1
{
height: 30px;
font-weight:bold;
 color: white;
 background-color: red;
  
}
textarea
{
float: centre;
padding-top:15px;
padding-bottom:25px;
padding-right:10px;
padding-left:10px;
box-sizing:border-box;
background-color:blue;
box-size:25%;
width:80%;
height:25%;


}
  </style>
</html>