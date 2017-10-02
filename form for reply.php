<html>
<?php include 't3.php'; ?>
<head>
<link href= "st.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1><bold> REPLIES...</h1></bold>



<?php 
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];

 include 'connect.php';
mysql_select_db('portal');
$num = $_GET['quesno'];
//echo" $no";
//'SELECT cat_id FROM categories WHERE cat_id=$no';

?>



<form method='post' action='reply.php?quesno=<?php echo $num?>'> 

   
    reply content: <textarea name="reply_content" ></textarea>  
    <input type="submit" value="submit">  
	<input type="hidden" name="reply_date" value="<?php $reply_date = date("F j, Y, g:i a");  ?></input>
 </form>

    </body>
</html>

