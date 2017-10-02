  <?php  
//connect.php  
$server = 'localhost';  
$username   = 'root';  
$password   = '';  
$database   = 'portal';  
  
$conn=mysql_connect("$server", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$database")or die("cannot select DB");
?>  