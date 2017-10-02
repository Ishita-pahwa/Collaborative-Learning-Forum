<html>
<body >

<?php  
session_start();
if(!isset($_SESSION['username']))
	{
	header("Location: welcome.php");
	
	}
$userid = $_SESSION['username'];
//connect.php  
$server = 'localhost';  
$username   = 'root';  
$password   = '';  
$database   = 'portal';  
  
$conn=mysql_connect("$server", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");
  //$n=$_GET['id'];
  //$password=$_POST['pass'];
  
mysql_query("INSERT INTO users(password)VALUES('$password')");

$cat_name=$_POST['cat_name'];

$table="categories";
  
 //the form has been posted, so save it 
    $sql = "INSERT INTO categories(cat_name)VALUES('$cat_name')";  
	"INSERT INTO topic_ques(cat_name)VALUES('$cat_name')";
   

   $result = mysql_query($sql); 

    if(!$result)  
    {  
        //something went wrong, display the error  
        echo 'Error' . mysql_error();  
    }  
    else  
    {  
        echo 'New category successfully added.';  

    }  
header("location: create1.php");
mysql_close($conn);
?>

<a href="create1.php?id"> see categories </a>
</style>
</body>
</html>