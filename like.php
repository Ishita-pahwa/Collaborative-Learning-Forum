 <?php
$server = 'localhost';  
$username   = 'root';  
$password   = '';  
$database   = 'portal'; 
$tbl_name = 'replies';

$conn=mysql_connect("$server", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");
//$result=mysql_query("SELECT * FROM $tbl_name ORDER BY id ");
 //mysql_fetch_array($result);

$num = $_GET['quesno'];

//if(mysql_query(" UPDATE replies SET likes = likes+1 WHERE id = '1'")) {
    //eader('location:display.php?quesno=$no'); }
//else {
    //echo "Error: " . mysql_error(); }
	 
$sql = " UPDATE replies SET likes=likes+1 WHERE id ='".(int)$_POST['id']."' ";
header("location: display.php?quesno=$num"); 
mysql_query($sql);

//header('location: button.php'); 
mysql_close($conn);
?>